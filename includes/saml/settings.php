<?php

$settings = array (
    // If 'strict' is True, then the PHP Toolkit will reject unsigned
    // or unencrypted messages if it expects them signed or encrypted
    // Also will reject the messages if not strictly follow the SAML
    // standard: Destination, NameId, Conditions ... are validated too.
    'strict' => false,

    // Enable debug mode (to print errors)
    'debug' => true,

    // Set a BaseURL to be used instead of try to guess
    // the BaseURL of the view that process the SAML Message.
    // Ex. http://sp.example.com/
    //     http://example.com/sp/
    'baseurl' => null,

    // Service Provider Data that we are deploying
    'sp' => array (
        // Identifier of the SP entity  (must be a URI)
        'entityId' => 'http://risk.insights.lzd.co',
        // Specifies info about where and how the <AuthnResponse> message MUST be
        // returned to the requester, in this case our SP.
        'assertionConsumerService' => array (
            // URL Location where the <Response> from the IdP will be returned
            'url' => 'https://risk.insights.lzd.co/extras/authentication/acs.php',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-Redirect binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
        ),
        // Specifies info about where and how the <Logout Response> message MUST be
        // returned to the requester, in this case our SP.
        'singleLogoutService' => array (
            // URL Location where the <Response> from the IdP will be returned
            'url' => 'https://risk.insights.lzd.co/extras/authentication/sls.php',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-Redirect binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ),
        // Specifies constraints on the name identifier to be used to
        // represent the requested subject.
        // Take a look on lib/Saml2/Constants.php to see the NameIdFormat supported
        'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',

        // Usually x509cert and privateKey of the SP are provided by files placed at
        // the certs folder. But we can also provide them with the following parameters
        'x509cert' => 'MIIFzTCCBS6gAwIBAgIIGIm7YvTZ76AwCgYIKoZIzj0EAwIwQTEbMBkGA1UEAwwSTGF6YWRhIFNlcnZpY2VzIENBMRUwEwYDVQQKDAxMYXphZGEgR3JvdXAxCzAJBgNVBAYTAlNHMB4XDTE3MTAxNzA5NTYyNFoXDTE5MTAxNzA5NTYyNFowZzEiMCAGCSqGSIb3DQEJARYTa2V2aW4uZ29AbGF6YWRhLmNvbTEdMBsGA1UEAwwUcmlzay5pbnNpZ2h0cy5semQuY28xFTATBgNVBAoMDExhemFkYSBHcm91cDELMAkGA1UEBhMCU0cwggIiMA0GCSqGSIb3DQEBAQUAA4ICDwAwggIKAoICAQC1jH62Q9WYYlGEthlkla2YUKYlTunq0txUV5Rb/+oAWYKvb0bCpMxPdv25Zp7g/NJ4CxY5DF0UcS7VWXg42gffQBxel8pStGQh/O1+CBFeXr4Z0v+q6eD3Ypo/qlHE/oEOh9WKLONgKtrRofmivDtxNHngDcyP4YfX8J7790/9y+rERKk3hM7eC88K1NW3LQ6Vqk1bIkqFK1b7dGM1iI2Hu2WjsAbTSGnYsI8ISjov/cNtNjn9ijqTcBQyT9W09egt4r6ZN26s2kgiy2T/ZjJraKWi2Fp8lrFQCtfBvqr6zVuE7fH4SyVfvWbMvsKjf0HUhoJZzH2RVNYPeBgG7OyulFSaV+9tIQpf/b8Sgji3iQN/1tmo5cGuITkd0UaADiTT5XSCXELXYahc/Qq9Al97Iyx2DTxlXDFSYusEB7CENNpbHF2W3tptg32Sl+KjSzeY16FoGrbxa5y340WOXWWvIG7OoPSWuHjjxBiKix5CnCK1agru5pgt5eMZg04hkbi/9bOVLrxjr0j0HQF1wyowmFy43GN6hsAXb868Bp8f+DKsrtPf3RGDEW9k4EuKQnGyMhD1PVpGKiTbUX/VjO2UJBzDecJQQFDLARdzsx0b/UwfAi/2AI7/Iovz5I/rYW6haE0SnbQgYSn3cEWmQksAl7nHz5U+PXSGRivLK6q/YwIDAQABo4ICHTCCAhkwMwYIKwYBBQUHAQEEJzAlMCMGCCsGAQUFBzABhhdodHRwOi8vb2NzcC5semQuY28vb2NzcDAdBgNVHQ4EFgQULIR855sOunngp1T38LMgbCpyYbwwDAYDVR0TAQH/BAIwADAfBgNVHSMEGDAWgBTaLvbaVlNFAscLZJNNJ3nOft9GhDCBgQYDVR0uBHoweDB2oHSgcoZwaHR0cDovL2NybC5semQuY28vZWpiY2EvcHVibGljd2ViL3dlYmRpc3QvY2VydGRpc3Q/Y21kPWRlbHRhY3JsJmlzc3Vlcj1DTj1MYXphZGEgU2VydmljZXMgQ0EsTz1MYXphZGEgR3JvdXAsQz1TRzCBxgYDVR0fBIG+MIG7MIG4oG+gbYZraHR0cDovL2NybC5semQuY28vZWpiY2EvcHVibGljd2ViL3dlYmRpc3QvY2VydGRpc3Q/Y21kPWNybCZpc3N1ZXI9Q049TGF6YWRhIFNlcnZpY2VzIENBLE89TGF6YWRhIEdyb3VwLEM9U0eiRaRDMEExGzAZBgNVBAMMEkxhemFkYSBTZXJ2aWNlcyBDQTEVMBMGA1UECgwMTGF6YWRhIEdyb3VwMQswCQYDVQQGEwJTRzAOBgNVHQ8BAf8EBAMCBaAwFgYDVR0lAQH/BAwwCgYIKwYBBQUHAwEwHwYDVR0RBBgwFoIUcmlzay5pbnNpZ2h0cy5semQuY28wCgYIKoZIzj0EAwIDgYwAMIGIAkIBZyxaueNFmxelRInoVMwDonaFRwZ/wYWDlCMvtU8D8z2ZgkWMotekmyidRJY0vrQoNYD2JT/Qx0Ozrg9t1ohp424CQgEeJzG9IQD5nygVMyjAWNqZI0EcUCZ3yZb+fbaKZrC4+N+e5ZAu1JNbHvdjqrHrCOtZri2UJNNKr2/n45YyzyKJjA==',
        'privateKey' => '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',

    ),

    // Identity Provider Data that we want connect with our SP
    'idp' => array (
        // Identifier of the IdP entity  (must be a URI)
        'entityId' => 'http://cas.lazada.com/adfs/services/trust',
        // SSO endpoint info of the IdP. (Authentication Request protocol)
        'singleSignOnService' => array (
            // URL Target of the IdP where the SP will send the Authentication Request Message
            'url' => 'https://cas.lazada.com/adfs/ls/',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-POST binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ),
        // SLO endpoint info of the IdP.
        'singleLogoutService' => array (
            // URL Location of the IdP where the SP will send the SLO Request
            'url' => 'https://cas.lazada.com/adfs/ls/',
            // SAML protocol binding to be used when returning the <Response>
            // message.  Onelogin Toolkit supports for this endpoint the
            // HTTP-Redirect binding only
            'binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
        ),
        // Public x509 certificate of the IdP
        'x509cert' => 'MIIC2DCCAcCgAwIBAgIQQIGuU+zYMLVDGLHXtr9U9zANBgkqhkiG9w0BAQsFADAoMSYwJAYDVQQDEx1BREZTIFNpZ25pbmcgLSBjYXMubGF6YWRhLmNvbTAeFw0xNzAxMTIwOTUyNDlaFw0yMDAxMTIwOTUyNDlaMCgxJjAkBgNVBAMTHUFERlMgU2lnbmluZyAtIGNhcy5sYXphZGEuY29tMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAr+qDhQLP2s5RCfsF6IyNguZdKR/a2ZaXPsfkBm2EIa6VyXhQlQAcn0IiuSJ1Qpgqbac9rJ2qS2aqMTf0j16UoOqmHe5APDepsSrnLResl6HN4auxGjK6QPS1CRgDBrGz0AfdenfEwcfQqb8KMOwXtaJZ4v005ootf1UK/GPunLEPt+7q31dHqgBA6HbYli/AtvKpwRQhAVSh+H6DGo69GwsS1c75kaY0w+Y/FHuVhz4xPHr/AAdW9GKOEtXvSPMBiisj0xsyrIg0fXoE475Vz2d5+eHFIdjeGpLOJYdAAROJAZ0gZZHNlvE8YaGr9faZ0sf3BqOu6cCNH/e43+nrPQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQAJYceGX2hGjaoiayXt/QD5RFd64yAdjDynB7KBEW2JWDp5kai+ahMykpNn03Tp/7cYJ+Qt21ogNE07e7+l+HB8kaLjlWz1sZfPHlzCRgfAslnhnOsosjihVzzNhXf8zYqFeghc3/eSOlXz8q/3ADBh4kK4z2vVnTkKPzKYCJqG1s5AqJpmRkFhslOQk6FGXFBuWQFMNITUtE4Fig/0lGWcSo25MLH7unh7xB1n4eOhyzsgDfnjOGDo+l3xt8LTzTuiyj+sMGNmpTd/Gg93nfQd2nVROIjPzVN4rmUUI4oWNME+9g/FFf/DM5PP47hEaPh45TFdBssf6cuOqkjENMGE'
    ),
);
