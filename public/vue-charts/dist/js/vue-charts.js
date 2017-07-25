/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 38);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */,
/* 1 */
/***/ (function(module, exports) {

/* globals __VUE_SSR_CONTEXT__ */

// this module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier /* server only */
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = injectStyles
  }

  if (hook) {
    var functional = options.functional
    var existing = functional
      ? options.render
      : options.beforeCreate
    if (!functional) {
      // inject component registration as beforeCreate hook
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    } else {
      // register for functioal component in vue file
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return existing(h, context)
      }
    }
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),
/* 2 */,
/* 3 */,
/* 4 */,
/* 5 */,
/* 6 */,
/* 7 */,
/* 8 */,
/* 9 */,
/* 10 */,
/* 11 */,
/* 12 */,
/* 13 */,
/* 14 */,
/* 15 */,
/* 16 */,
/* 17 */,
/* 18 */,
/* 19 */,
/* 20 */,
/* 21 */,
/* 22 */,
/* 23 */,
/* 24 */,
/* 25 */,
/* 26 */,
/* 27 */,
/* 28 */,
/* 29 */,
/* 30 */,
/* 31 */,
/* 32 */,
/* 33 */,
/* 34 */,
/* 35 */,
/* 36 */,
/* 37 */,
/* 38 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(39);


/***/ }),
/* 39 */
/***/ (function(module, exports, __webpack_require__) {

if (typeof Chart === "undefined") throw "ChartJS is undefined";
// 4 kb here
window.VueCharts = {};

VueCharts.core = __webpack_require__(40);

VueCharts.install = function (Vue) {
    Vue.component('chartjs-line', __webpack_require__(41));
    Vue.component('chartjs-bar', __webpack_require__(44));
    Vue.component('chartjs-horizontal-bar', __webpack_require__(47));
    Vue.component('chartjs-radar', __webpack_require__(50));
    Vue.component('chartjs-polar-area', __webpack_require__(53));
    Vue.component('chartjs-pie', __webpack_require__(56));
    Vue.component('chartjs-doughnut', __webpack_require__(59));
};

/***/ }),
/* 40 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony default export */ __webpack_exports__["default"] = ({
    props: {
        beginzero: {
            type: Boolean,
            default: function _default() {
                return true;
            }
        },
        datalabel: {
            type: String,
            default: function _default() {
                return 'My dataset';
            }
        },
        labels: {
            type: Array,
            default: function _default() {
                return ['first', 'second', 'third', 'fourth'];
            }
        },
        data: {
            type: Array,
            default: function _default() {
                return [40, 60, 45, 70];
            }
        },
        width: {
            type: Number,
            default: function _default() {
                return null;
            }
        },
        height: {
            type: Number,
            default: function _default() {
                return null;
            }
        },
        bordercolor: {
            default: function _default() {
                return "rgba(75,192,192,1)";
            }
        },
        backgroundcolor: {
            default: function _default() {
                return "rgba(75,192,192,0.4)";
            }
        },
        scalesdisplay: {
            type: Boolean,
            default: function _default() {
                return true;
            }
        },
        target: {
            type: String,
            default: function _default() {
                return null;
            }
        },
        datasets: {
            type: Array,
            default: function _default() {
                return null;
            }
        },
        option: {
            type: Object,
            default: function _default() {
                return null;
            }
        },
        bind: {
            type: Boolean,
            default: function _default() {
                return false;
            }
        }
    },
    data: function data() {
        return {
            isDatasetsOverride: false,
            isOptionOverride: false,
            type: null,
            canvas: null,
            context: null,
            chart: null,
            chart_data: {
                labels: this.labels,
                datasets: this.datasets
            },
            options: {
                responsive: false,
                maintainAspectRatio: false,
                scales: {
                    yAxes: [{
                        display: this.scalesdisplay,
                        ticks: {
                            beginAtZero: this.beginzero
                        }
                    }]
                }
            }
        };
    },

    watch: {
        data: {
            handler: function handler(val, oldVal) {
                if (!this.isDatasetsOverride && this.bind) {
                    this.chart_data.datasets[0].data = this.data;
                    this.renderChart();
                }
            },
            deep: true
        },
        labels: {
            handler: function handler(val, oldVal) {
                if (this.bind) {
                    this.chart_data.labels = val;
                    this.renderChart();
                }
            },
            deep: true
        },
        datasets: {
            handler: function handler(val, oldVal) {
                var _this = this;

                if (this.isDatasetsOverride && this.bind) {
                    this.cleanChart();
                    this.sleep(5).then(function () {
                        _this.renderChart();
                    });
                }
            },
            deep: true
        }
    },
    methods: {
        sleep: function sleep(time) {
            return new Promise(function (resolve) {
                return setTimeout(resolve, time);
            });
        },
        setDatasets: function setDatasets() {
            this.chart_data.datasets = this.datasets;
        },
        setOption: function setOption() {
            this.options = this.option;
        },
        initTargetCanvas: function initTargetCanvas() {
            if (this.target == null) {
                this.canvas = this.$refs.canvas;
                this.context = this.$refs.canvas.getContext('2d');
                this.renderChart();
            } else {
                this.canvas = document.getElementById(this.target);
                this.context = document.getElementById(this.target).getContext('2d');
                if (typeof datasets == 'undefined') window.datasets = [];
                if (typeof datasets[this.target] == 'undefined') window.datasets[this.target] = [];
                this.appendChart();
            }
        },
        cleanChart: function cleanChart() {
            if (this.chart != null) this.chart.destroy();
        },
        checkOverride: function checkOverride() {
            if (this.datasets != null) {
                this.setDatasets();
                this.isDatasetsOverride = true;
                // console.log('override the datasets');
            }
            if (this.option != null) {
                this.setOption();
                this.isOptionOverride = true;
                // console.log('override the datasets');
            }
        },
        renderChart: function renderChart() {
            // console.log('renderChart');
            this.cleanChart();
            this.chart = new Chart(this.context, {
                type: this.type,
                data: this.chart_data,
                options: this.options
            });
        },
        appendChart: function appendChart() {
            // console.log('appendChart');
            window.datasets[this.target].push(this.chart_data.datasets[0]);
            this.chart_data.datasets = window.datasets[this.target];
            if (document.getElementById(this.target).getAttribute("count") == this.chart_data.datasets.length) {
                this.renderChart();
            }
        },
        checkSize: function checkSize() {
            if ((this.width == null || this.height == null) && !this.isOptionOverride) {
                this.options.responsive = true;
                this.options.maintainAspectRatio = true;
            }
        }
    },
    mounted: function mounted() {
        this.checkOverride();
        this.checkSize();
        this.initTargetCanvas();
    },
    beforeDestroy: function beforeDestroy() {
        this.cleanChart();
        // console.log('Line Chart Before Destroy');
    }
});

/***/ }),
/* 41 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__(1)(
  /* script */
  __webpack_require__(42),
  /* template */
  __webpack_require__(43),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/hchs/Documents/projects/laravel/vue-charts-document/vue-charts/src/components/chartjs-line.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] chartjs-line.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-77b488a6", Component.options)
  } else {
    hotAPI.reload("data-v-77b488a6", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 42 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mixins: [VueCharts.core.default],
    props: {
        beginzero: {
            type: Boolean,
            default: false
        },
        fill: {
            type: Boolean,
            default: false
        },
        linetension: {
            type: Number,
            default: function _default() {
                return 0.2;
            }
        },
        pointbordercolor: {
            type: String,
            default: function _default() {
                return "rgba(75,192,192,1)";
            }
        },
        pointbackgroundcolor: {
            type: String,
            default: function _default() {
                return "#fff";
            }
        },
        pointhoverbackgroundcolor: {
            type: String,
            default: function _default() {
                return "rgba(75,192,192,1)";
            }
        },
        pointhoverbordercolor: {
            type: String,
            default: function _default() {
                return "rgba(220,220,220,1)";
            }
        },
        pointborderwidth: {
            type: Number,
            default: function _default() {
                return 1;
            }
        },
        pointhoverborderwidth: {
            type: Number,
            default: function _default() {
                return 2;
            }
        }
    },
    data: function data() {
        return {
            type: 'line',
            chart_data: {
                labels: this.labels,
                datasets: [{
                    type: 'line',
                    label: this.datalabel,
                    fill: this.fill,
                    lineTension: this.linetension,
                    backgroundColor: this.backgroundcolor,
                    borderColor: this.bordercolor,
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    pointBorderColor: this.pointbordercolor,
                    pointBackgroundColor: this.pointbackgroundcolor,
                    pointBorderWidth: this.pointborderwidth,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: this.pointhoverbackgroundcolor,
                    pointHoverBorderColor: this.pointhoverbordercolor,
                    pointHoverBorderWidth: this.pointhoverborderwidth,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: this.data,
                    spanGaps: false
                }]
            }
        };
    }
});

/***/ }),
/* 43 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(!_vm.target) ? _c('canvas', {
    ref: "canvas",
    attrs: {
      "width": _vm.width,
      "height": _vm.height
    }
  }) : _vm._e()])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-77b488a6", module.exports)
  }
}

/***/ }),
/* 44 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__(1)(
  /* script */
  __webpack_require__(45),
  /* template */
  __webpack_require__(46),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/hchs/Documents/projects/laravel/vue-charts-document/vue-charts/src/components/chartjs-bar.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] chartjs-bar.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-16e441d1", Component.options)
  } else {
    hotAPI.reload("data-v-16e441d1", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 45 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mixins: [VueCharts.core.default],
    data: function data() {
        return {
            type: 'bar',
            chart_data: {
                labels: this.labels,
                datasets: [{
                    type: 'bar',
                    label: this.datalabel,
                    backgroundColor: this.backgroundcolor,
                    borderColor: this.bordercolor,
                    borderWidth: 1,
                    data: this.data
                }]
            }
        };
    }
});

/***/ }),
/* 46 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(!_vm.target) ? _c('canvas', {
    ref: "canvas",
    attrs: {
      "width": _vm.width,
      "height": _vm.height
    }
  }) : _vm._e()])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-16e441d1", module.exports)
  }
}

/***/ }),
/* 47 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__(1)(
  /* script */
  __webpack_require__(48),
  /* template */
  __webpack_require__(49),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/hchs/Documents/projects/laravel/vue-charts-document/vue-charts/src/components/chartjs-horizontal-bar.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] chartjs-horizontal-bar.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-ef0b3fc8", Component.options)
  } else {
    hotAPI.reload("data-v-ef0b3fc8", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 48 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mixins: [VueCharts.core.default],
    data: function data() {
        return {
            type: 'horizontalBar',
            chart_data: {
                labels: this.labels,
                datasets: [{
                    type: 'horizontalBar',
                    label: this.datalabel,
                    backgroundColor: this.backgroundcolor,
                    borderColor: this.bordercolor,
                    borderWidth: 1,
                    data: this.data
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        stacked: false
                    }],
                    xAxes: [{
                        stacked: true
                    }]
                }
            }
        };
    }
});

/***/ }),
/* 49 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(!_vm.target) ? _c('canvas', {
    ref: "canvas",
    attrs: {
      "width": _vm.width,
      "height": _vm.height
    }
  }) : _vm._e()])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-ef0b3fc8", module.exports)
  }
}

/***/ }),
/* 50 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__(1)(
  /* script */
  __webpack_require__(51),
  /* template */
  __webpack_require__(52),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/hchs/Documents/projects/laravel/vue-charts-document/vue-charts/src/components/chartjs-radar.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] chartjs-radar.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-b58cd478", Component.options)
  } else {
    hotAPI.reload("data-v-b58cd478", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 51 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mixins: [VueCharts.core.default],
    props: {
        pointbordercolor: {
            default: function _default() {
                return "#fff";
            }
        },
        pointbackgroundcolor: {
            default: function _default() {
                return "rgba(179,181,198,1)";
            }
        }
    },
    data: function data() {
        return {
            type: 'radar',
            chart_data: {
                labels: this.labels,
                datasets: [{
                    label: this.datalabel,
                    backgroundColor: this.backgroundcolor,
                    borderColor: this.bordercolor,
                    pointBackgroundColor: this.pointbackgroundcolor,
                    pointBorderColor: this.pointbordercolor,
                    pointHoverBackgroundColor: "#fff",
                    pointHoverBorderColor: "rgba(179,181,198,1)",
                    data: this.data
                }]
            },
            options: {
                scale: {
                    reverse: false,
                    ticks: {
                        beginAtZero: this.beginzero
                    }
                }
            }
        };
    }
});

/***/ }),
/* 52 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(!_vm.target) ? _c('canvas', {
    ref: "canvas",
    attrs: {
      "width": _vm.width,
      "height": _vm.height
    }
  }) : _vm._e()])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-b58cd478", module.exports)
  }
}

/***/ }),
/* 53 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__(1)(
  /* script */
  __webpack_require__(54),
  /* template */
  __webpack_require__(55),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/hchs/Documents/projects/laravel/vue-charts-document/vue-charts/src/components/chartjs-polar-area.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] chartjs-polar-area.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-18eb22ee", Component.options)
  } else {
    hotAPI.reload("data-v-18eb22ee", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 54 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mixins: [VueCharts.core.default],
    props: {
        hoverbackgroundcolor: {
            default: function _default() {
                return "rgba(75,192,192,0.6)";
            }
        },
        hoverbordercolor: {
            default: function _default() {
                return "rgba(179,181,198,1)";
            }
        }
    },
    data: function data() {
        return {
            type: 'polarArea',
            chart_data: {
                labels: this.labels,
                datasets: [{
                    label: this.datalabel,
                    backgroundColor: this.backgroundcolor,
                    borderColor: this.bordercolor,
                    hoverBackgroundColor: this.hoverbackgroundcolor,
                    hoverBorderColor: this.hoverbackgroundcolor,
                    data: this.data
                }]
            }
        };
    }
});

/***/ }),
/* 55 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(!_vm.target) ? _c('canvas', {
    ref: "canvas",
    attrs: {
      "width": _vm.width,
      "height": _vm.height
    }
  }) : _vm._e()])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-18eb22ee", module.exports)
  }
}

/***/ }),
/* 56 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__(1)(
  /* script */
  __webpack_require__(57),
  /* template */
  __webpack_require__(58),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/hchs/Documents/projects/laravel/vue-charts-document/vue-charts/src/components/chartjs-pie.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] chartjs-pie.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-086b12ca", Component.options)
  } else {
    hotAPI.reload("data-v-086b12ca", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 57 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mixins: [VueCharts.core.default],
    props: {
        backgroundcolor: {
            default: function _default() {
                return ["#FF6384", "#36A2EB", "#FFCE56", "#00A600"];
            }
        },
        hoverbackgroundcolor: {
            default: function _default() {
                return ["#FF6384", "#36A2EB", "#FFCE56", "#00A600"];
            }
        },
        bordercolor: {
            default: function _default() {
                return "#fff";
            }
        },
        hoverbordercolor: {
            default: function _default() {
                return "";
            }
        }
    },
    data: function data() {
        return {
            type: 'pie',
            chart_data: {
                labels: this.labels,
                datasets: [{
                    label: this.datalabel,
                    backgroundColor: this.backgroundcolor,
                    borderColor: this.bordercolor,
                    hoverBackgroundColor: this.hoverbackgroundcolor,
                    hoverBorderColor: this.hoverbackgroundcolor,
                    data: this.data
                }]
            },
            options: {
                scale: {
                    reverse: true,
                    ticks: {
                        beginAtZero: this.beginzero
                    }
                }
            }
        };
    }
});

/***/ }),
/* 58 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(!_vm.target) ? _c('canvas', {
    ref: "canvas",
    attrs: {
      "width": _vm.width,
      "height": _vm.height
    }
  }) : _vm._e()])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-086b12ca", module.exports)
  }
}

/***/ }),
/* 59 */
/***/ (function(module, exports, __webpack_require__) {

var disposed = false
var Component = __webpack_require__(1)(
  /* script */
  __webpack_require__(60),
  /* template */
  __webpack_require__(61),
  /* styles */
  null,
  /* scopeId */
  null,
  /* moduleIdentifier (server only) */
  null
)
Component.options.__file = "/Users/hchs/Documents/projects/laravel/vue-charts-document/vue-charts/src/components/chartjs-doughnut.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key.substr(0, 2) !== "__"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] chartjs-doughnut.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-072bb698", Component.options)
  } else {
    hotAPI.reload("data-v-072bb698", Component.options)
  }
  module.hot.dispose(function (data) {
    disposed = true
  })
})()}

module.exports = Component.exports


/***/ }),
/* 60 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    mixins: [VueCharts.core.default],
    props: {
        backgroundcolor: {
            default: function _default() {
                return ["#FF6384", "#36A2EB", "#FFCE56", "#00A600"];
            }
        },
        hoverbackgroundcolor: {
            default: function _default() {
                return ["#FF6384", "#36A2EB", "#FFCE56", "#00A600"];
            }
        },
        bordercolor: {
            default: function _default() {
                return "#fff";
            }
        },
        hoverbordercolor: {
            default: function _default() {
                return "";
            }
        }
    },
    data: function data() {
        return {
            type: 'doughnut',
            chart_data: {
                labels: this.labels,
                datasets: [{
                    label: this.datalabel,
                    backgroundColor: this.backgroundcolor,
                    borderColor: this.bordercolor,
                    hoverBackgroundColor: this.hoverbackgroundcolor,
                    hoverBorderColor: this.hoverbackgroundcolor,
                    data: this.data
                }]
            },
            options: {
                scale: {
                    reverse: true,
                    ticks: {
                        beginAtZero: this.beginzero
                    }
                }
            }
        };
    }
});

/***/ }),
/* 61 */
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [(!_vm.target) ? _c('canvas', {
    ref: "canvas",
    attrs: {
      "width": _vm.width,
      "height": _vm.height
    }
  }) : _vm._e()])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-072bb698", module.exports)
  }
}

/***/ })
/******/ ]);