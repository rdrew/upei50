global.bs = require('browser-sync').create()

const { helpers } = require('./helpers')

const syncConfig = require('./.sync.json')

// Start static server
function syncStart (cb) {
  if (global.config.sync.run) {
    let thisConfig = {}

    if (syncConfig.proxy) {
      thisConfig = Object.assign({}, syncConfig, {
        //proxy: syncConfig.proxy,
        injectChanges: true,
        proxy: "http://upei50.dev.islandarchives.ca",
        serveStatic: ['.'],
        //files: ['./css/style.css','./js/js.js'],
        files: ['./build/css/upei50.styles.css'],
        plugins: ['bs-rewrite-rules'],
        rewriteRules: [
            {
                match: 'http://upei50.dev.islandarchives.ca/sites/upei50.dev.islandarchives.ca/themes/upei50/build/css/upei50.styles.css',

                replace: '/build/css/upei50.styles.css'
            }
//            {
 //               match: '/themes/custom/lmmi_journal/css/',
  //              replace: '/css/'
   //         }
        ]

      })
    } else {
      const thisServer = syncConfig.server.baseDir
        ? helpers.parse(syncConfig.server.baseDir)
        : Object.assign({}, syncConfig.server, { baseDir: helpers.dist() })

      thisConfig = Object.assign({}, syncConfig, {
        server: thisServer
      })
    }

    global.bs.init(thisConfig)
  }

  cb()
}

// Stop static server
function syncStop (cb) {
  global.bs.exit()

  cb()
}

exports.sync = {
  syncStart,
  syncStop
}
