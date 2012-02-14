<?php

namespace Inmovilizame\PhotoblogBundle\Utils;

class Utility
{

    static public function slugize($cadena, $separador = '-')
    {
        // Código copiado de http://cubiq.org/the-perfect-php-clean-url-generator
        $slug = iconv('UTF-8', 'ASCII//TRANSLIT', $cadena);
        $slug = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $slug);
        $slug = strtolower(trim($slug, $separador));
        $slug = preg_replace("/[\/_|+ -]+/", $separador, $slug);
        return $slug;
    }

    static public function encrypt($pass, $salt = '123456789012345678901234')
    {
        if (!$pass)
            return NULL;
        
        $cipher = mcrypt_module_open(MCRYPT_3DES, '', MCRYPT_MODE_ECB, '');
        $iv = substr($salt, 0, mcrypt_enc_get_iv_size($cipher));
        $key = substr($salt, 0, mcrypt_enc_get_key_size($cipher));
        
        if (mcrypt_generic_init($cipher, $key, $iv) != -1)
        {
            $cipherText = mcrypt_generic($cipher, $pass);
            mcrypt_generic_deinit($cipher);
            return bin2hex($cipherText);
        }
        else
        {
            return NULL;
        }
    }

    static public function decrypt($pass, $salt = '123456789012345678901234')
    {
        if (!$pass)
            return NULL;
        
        $pass = self::hex2bin($pass);

        $cipher = mcrypt_module_open(MCRYPT_3DES, '', MCRYPT_MODE_ECB, '');
        $iv = substr($salt, 0, mcrypt_enc_get_iv_size($cipher));
        $key = substr($salt, 0, mcrypt_enc_get_key_size($cipher));
        
        mcrypt_generic_init($cipher, $key, $iv);
        
        $response = rtrim(mdecrypt_generic($cipher, $pass), '');
        
        mcrypt_generic_deinit($cipher);
        mcrypt_module_close($cipher);
        
        return $response;
    }

    static private function hex2bin($hex)
    {
        $rv = '';
        foreach (str_split($hex, 2) as $b)
        {
            $rv .= chr(hexdec($b));
        }
        return $rv;
    }
}