requirejs.config({
    paths: {
        websockets: '../../websockets/js',
        bootstrap: '../vendor/bootstrap/dist/js/bootstrap',
        jquery: '../vendor/jquery/dist/jquery',
        fontawesome: '../vendor/fontawesome/fonts/*',
        react: '../vendor/react/react'
    },
    shim: {
        bootstrap: [
            'jquery'
        ]
    },
    packages: [

    ]
});
