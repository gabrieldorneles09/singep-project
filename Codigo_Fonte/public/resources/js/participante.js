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
/******/ 	__webpack_require__.p = "/";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/assets/js/cadastro/participante.js":
/***/ (function(module, exports) {

new Vue({
  el: '#cadastro',
  data: {
    erro: null,
    registros: {},
    adicionar: {
      id: null,
      nome: '',
      email: '',
      cpf: '',
      telefone: '',
      filiacao: '',
      senha: '',
      permissao: '',
      status: 1
    }

  },
  filters: {
    cpfMask: function cpfMask(arg) {
      return mask('000.000.000-00', { reverse: true });
    }
  },
  computed: {},

  mounted: function mounted() {
    this.list();
  },
  methods: {
    list: function list() {
      this.$http.get('/api/usuario/list').then(function (response) {
        this.$set(this, "registros", response.data);
      }, function (response) {
        this.$set(this, "erro", response.data);
      });
    },

    save: function save() {
      this.$http.post('/api/usuario/save', {
        registro: this.adicionar
      }).then(function (response) {
        this.list();
        $("#modalCadastro").modal('hide');
      }, function (response) {
        this.$set(this, "erro", response.data);
      });
    }

  }

});

/***/ }),

/***/ 1:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__("./resources/assets/js/cadastro/participante.js");


/***/ })

/******/ });