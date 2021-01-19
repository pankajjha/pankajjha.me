<?php
require_once 'vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

if (! function_exists('starts_with')) {
// Function to check string starting
// with given substring
    function starts_with($string, $startString)
    {
        $len = strlen($startString);
        return (substr($string, 0, $len) === $startString);
    }
}

if (! function_exists('mix')) {
    /**
     * Get the path to a versioned Mix file.
     *
     * @param string $path
     * @param string $manifestDirectory
     * @return string
     *
     * @throws \Exception
     */
    function mix($path, $manifestDirectory = '')
    {
        static $manifest;
        $publicFolder = ( isset($_ENV['APP_ENV']) && $_ENV['APP_ENV'] == 'production' )?'/public':'';
        $rootPath = $_SERVER['DOCUMENT_ROOT'];
        $publicPath = $rootPath . $publicFolder;
        if ($manifestDirectory && ! starts_with($manifestDirectory, '/')) {
            $manifestDirectory = "/{$manifestDirectory}";
        }

        if (! $manifest) {
            if (! file_exists($manifestPath = ($publicPath . $manifestDirectory.'/mix-manifest.json') )) {
                if(! file_exists($manifestPath = ( __DIR__ .'/mix-manifest.json') )){
                    throw new Exception('The Mix manifest does not exist.');
                }


            }
            $manifest = json_decode(file_get_contents($manifestPath), true);
        }
        
        if (! starts_with($path, '/')) {
            $path = "/{$path}";
        }
        //$path = $publicFolder . $path;
        
        if (! array_key_exists($path, $manifest)) {
            throw new Exception(
                "Unable to locate Mix file: {$path}. Please check your ".
                'webpack.mix.js output paths and try again.'
            );
        }
        
        $appUrl = (isset($_ENV['APP_URL']))?$_ENV['APP_URL']:'https://pankajjha.me';

        return file_exists($publicPath . ($manifestDirectory.'/hot'))
            ? $appUrl."{$manifest[$path]}"
            : $manifestDirectory.$manifest[$path];
    }
}