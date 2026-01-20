<?php
/**
 * Content Security Policy Configuration
 * 
 * Esta configuración define las políticas de seguridad de contenido (CSP)
 * para proteger la aplicación contra ataques XSS y otros tipos de inyección.
 * 
 * Para más información: https://book.cakephp.org/5/es/security/content-security-policy.html
 * 
 * Formato basado en CSPBuilder: https://github.com/paragonie/csp-builder
 */

return [
  
    'report-only' => true,
    
    'default-src' => [
        'self' => true,
    ],
    
    'script-src' => [
        'self' => true,
        'unsafe-inline' => true,  
        'unsafe-eval' => false,  
        'allow' => [
            'https://code.jquery.com',
            'https://cdnjs.cloudflare.com',
            'https://ajax.googleapis.com',
        ],
    ],
    
    'style-src' => [
        'self' => true,
        'unsafe-inline' => true,  
        'allow' => [
            'https://fonts.googleapis.com',
            'https://cdnjs.cloudflare.com',
            'https://use.fontawesome.com',
        ],
    ],
    
    'font-src' => [
        'self' => true,
        'data' => true, 
        'allow' => [
            'https://fonts.gstatic.com',
            'https://cdnjs.cloudflare.com',
            'https://use.fontawesome.com',
        ],
    ],
    
 
    'img-src' => [
        'self' => true,
        'data' => true, 
        'https' => true,  
    ],
    
    'connect-src' => [
        'self' => true,
        'allow' => [
            'https://col.berkleyonline.com.ar',
            'https://seguros.berkleymex.com',
            'https://fianzas.berkleymex.com',
            'https://validafianza.berkleymex.com',
        ],
    ],
    
    'frame-src' => [
        'self' => true,
        'allow' => [
            'https://www.google.com',
        ],
    ],
    
    'object-src' => false,  // 
    
    'media-src' => [
        'self' => true,
    ],
    
    'worker-src' => [
        'self' => true,
    ],
    
    'manifest-src' => [
        'self' => true,
    ],
    
    'form-action' => [
        'self' => true,
        'allow' => [
            'https://col.berkleyonline.com.ar',
        ],
    ],
    
    'frame-ancestors' => [
        'self' => true,
    ],
    
    'base-uri' => [
        'self' => true,
    ],
    

    'upgrade-insecure-requests' => false,
];
