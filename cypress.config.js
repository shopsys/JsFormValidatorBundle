const { defineConfig } = require('cypress')

module.exports = defineConfig({
    e2e: {
        baseUrl: 'http://webserver/',
        supportFile: false
    }
})