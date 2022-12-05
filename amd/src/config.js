define([], function() {
  window.requirejs.config({
    baseUrl: 'js',
    paths: {
      'gapi': [
        "https://apis.google.com/js/api",
        // Add the library for migrate to google identity services.
        "https://accounts.google.com/gsi/client"
      ],
    },
    shim: {
      'gapi': {exports: 'gapi'},
    },
  });
});
