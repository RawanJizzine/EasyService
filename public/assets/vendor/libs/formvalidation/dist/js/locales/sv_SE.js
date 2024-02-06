(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define([], factory);
	else {
		var a = factory();
		for(var i in a) (typeof exports === 'object' ? exports : root)[i] = a[i];
	}
})(self, function() {
return /******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/assets/vendor/libs/formvalidation/dist/js/locales/sv_SE.js":
/*!******************************************************************************!*\
  !*** ./resources/assets/vendor/libs/formvalidation/dist/js/locales/sv_SE.js ***!
  \******************************************************************************/
/***/ (function(module, exports, __webpack_require__) {

var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_RESULT__;function _typeof(o) { "@babel/helpers - typeof"; return _typeof = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && "function" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? "symbol" : typeof o; }, _typeof(o); }
(function (global, factory) {
  ( false ? 0 : _typeof(exports)) === 'object' && "object" !== 'undefined' ? module.exports = factory() :  true ? !(__WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
		__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
		(__WEBPACK_AMD_DEFINE_FACTORY__.call(exports, __webpack_require__, exports, module)) :
		__WEBPACK_AMD_DEFINE_FACTORY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__)) : (0);
})(this, function () {
  'use strict';

  /**
   * Swedish language package
   * Translated by @ulsa
   */
  var sv_SE = {
    base64: {
      "default": 'Vänligen mata in ett giltigt Base64-kodat värde'
    },
    between: {
      "default": 'Vänligen mata in ett värde mellan %s och %s',
      notInclusive: 'Vänligen mata in ett värde strikt mellan %s och %s'
    },
    bic: {
      "default": 'Vänligen mata in ett giltigt BIC-nummer'
    },
    callback: {
      "default": 'Vänligen mata in ett giltigt värde'
    },
    choice: {
      between: 'Vänligen välj %s - %s alternativ',
      "default": 'Vänligen mata in ett giltigt värde',
      less: 'Vänligen välj minst %s alternativ',
      more: 'Vänligen välj max %s alternativ'
    },
    color: {
      "default": 'Vänligen mata in en giltig färg'
    },
    creditCard: {
      "default": 'Vänligen mata in ett giltigt kredikortsnummer'
    },
    cusip: {
      "default": 'Vänligen mata in ett giltigt CUSIP-nummer'
    },
    date: {
      "default": 'Vänligen mata in ett giltigt datum',
      max: 'Vänligen mata in ett datum före %s',
      min: 'Vänligen mata in ett datum efter %s',
      range: 'Vänligen mata in ett datum i intervallet %s - %s'
    },
    different: {
      "default": 'Vänligen mata in ett annat värde'
    },
    digits: {
      "default": 'Vänligen mata in endast siffror'
    },
    ean: {
      "default": 'Vänligen mata in ett giltigt EAN-nummer'
    },
    ein: {
      "default": 'Vänligen mata in ett giltigt EIN-nummer'
    },
    emailAddress: {
      "default": 'Vänligen mata in en giltig emailadress'
    },
    file: {
      "default": 'Vänligen välj en giltig fil'
    },
    greaterThan: {
      "default": 'Vänligen mata in ett värde större än eller lika med %s',
      notInclusive: 'Vänligen mata in ett värde större än %s'
    },
    grid: {
      "default": 'Vänligen mata in ett giltigt GRID-nummer'
    },
    hex: {
      "default": 'Vänligen mata in ett giltigt hexadecimalt tal'
    },
    iban: {
      countries: {
        AD: 'Andorra',
        AE: 'Förenade Arabemiraten',
        AL: 'Albanien',
        AO: 'Angola',
        AT: 'Österrike',
        AZ: 'Azerbadjan',
        BA: 'Bosnien och Herzegovina',
        BE: 'Belgien',
        BF: 'Burkina Faso',
        BG: 'Bulgarien',
        BH: 'Bahrain',
        BI: 'Burundi',
        BJ: 'Benin',
        BR: 'Brasilien',
        CH: 'Schweiz',
        CI: 'Elfenbenskusten',
        CM: 'Kamerun',
        CR: 'Costa Rica',
        CV: 'Cape Verde',
        CY: 'Cypern',
        CZ: 'Tjeckien',
        DE: 'Tyskland',
        DK: 'Danmark',
        DO: 'Dominikanska Republiken',
        DZ: 'Algeriet',
        EE: 'Estland',
        ES: 'Spanien',
        FI: 'Finland',
        FO: 'Färöarna',
        FR: 'Frankrike',
        GB: 'Storbritannien',
        GE: 'Georgien',
        GI: 'Gibraltar',
        GL: 'Grönland',
        GR: 'Greekland',
        GT: 'Guatemala',
        HR: 'Kroatien',
        HU: 'Ungern',
        IE: 'Irland',
        IL: 'Israel',
        IR: 'Iran',
        IS: 'Island',
        IT: 'Italien',
        JO: 'Jordanien',
        KW: 'Kuwait',
        KZ: 'Kazakstan',
        LB: 'Libanon',
        LI: 'Lichtenstein',
        LT: 'Litauen',
        LU: 'Luxemburg',
        LV: 'Lettland',
        MC: 'Monaco',
        MD: 'Moldovien',
        ME: 'Montenegro',
        MG: 'Madagaskar',
        MK: 'Makedonien',
        ML: 'Mali',
        MR: 'Mauretanien',
        MT: 'Malta',
        MU: 'Mauritius',
        MZ: 'Mozambique',
        NL: 'Holland',
        NO: 'Norge',
        PK: 'Pakistan',
        PL: 'Polen',
        PS: 'Palestina',
        PT: 'Portugal',
        QA: 'Qatar',
        RO: 'Rumänien',
        RS: 'Serbien',
        SA: 'Saudiarabien',
        SE: 'Sverige',
        SI: 'Slovenien',
        SK: 'Slovakien',
        SM: 'San Marino',
        SN: 'Senegal',
        TL: 'Östtimor',
        TN: 'Tunisien',
        TR: 'Turkiet',
        VG: 'Brittiska Jungfruöarna',
        XK: 'Republiken Kosovo'
      },
      country: 'Vänligen mata in ett giltigt IBAN-nummer i %s',
      "default": 'Vänligen mata in ett giltigt IBAN-nummer'
    },
    id: {
      countries: {
        BA: 'Bosnien och Hercegovina',
        BG: 'Bulgarien',
        BR: 'Brasilien',
        CH: 'Schweiz',
        CL: 'Chile',
        CN: 'Kina',
        CZ: 'Tjeckien',
        DK: 'Danmark',
        EE: 'Estland',
        ES: 'Spanien',
        FI: 'Finland',
        HR: 'Kroatien',
        IE: 'Irland',
        IS: 'Island',
        LT: 'Litauen',
        LV: 'Lettland',
        ME: 'Montenegro',
        MK: 'Makedonien',
        NL: 'Nederländerna',
        PL: 'Polen',
        RO: 'Rumänien',
        RS: 'Serbien',
        SE: 'Sverige',
        SI: 'Slovenien',
        SK: 'Slovakien',
        SM: 'San Marino',
        TH: 'Thailand',
        TR: 'Turkiet',
        ZA: 'Sydafrika'
      },
      country: 'Vänligen mata in ett giltigt identifikationsnummer i %s',
      "default": 'Vänligen mata in ett giltigt identifikationsnummer'
    },
    identical: {
      "default": 'Vänligen mata in samma värde'
    },
    imei: {
      "default": 'Vänligen mata in ett giltigt IMEI-nummer'
    },
    imo: {
      "default": 'Vänligen mata in ett giltigt IMO-nummer'
    },
    integer: {
      "default": 'Vänligen mata in ett giltigt heltal'
    },
    ip: {
      "default": 'Vänligen mata in en giltig IP-adress',
      ipv4: 'Vänligen mata in en giltig IPv4-adress',
      ipv6: 'Vänligen mata in en giltig IPv6-adress'
    },
    isbn: {
      "default": 'Vänligen mata in ett giltigt ISBN-nummer'
    },
    isin: {
      "default": 'Vänligen mata in ett giltigt ISIN-nummer'
    },
    ismn: {
      "default": 'Vänligen mata in ett giltigt ISMN-nummer'
    },
    issn: {
      "default": 'Vänligen mata in ett giltigt ISSN-nummer'
    },
    lessThan: {
      "default": 'Vänligen mata in ett värde mindre än eller lika med %s',
      notInclusive: 'Vänligen mata in ett värde mindre än %s'
    },
    mac: {
      "default": 'Vänligen mata in en giltig MAC-adress'
    },
    meid: {
      "default": 'Vänligen mata in ett giltigt MEID-nummer'
    },
    notEmpty: {
      "default": 'Vänligen mata in ett värde'
    },
    numeric: {
      "default": 'Vänligen mata in ett giltigt flyttal'
    },
    phone: {
      countries: {
        AE: 'Förenade Arabemiraten',
        BG: 'Bulgarien',
        BR: 'Brasilien',
        CN: 'Kina',
        CZ: 'Tjeckien',
        DE: 'Tyskland',
        DK: 'Danmark',
        ES: 'Spanien',
        FR: 'Frankrike',
        GB: 'Storbritannien',
        IN: 'Indien',
        MA: 'Marocko',
        NL: 'Holland',
        PK: 'Pakistan',
        RO: 'Rumänien',
        RU: 'Ryssland',
        SK: 'Slovakien',
        TH: 'Thailand',
        US: 'USA',
        VE: 'Venezuela'
      },
      country: 'Vänligen mata in ett giltigt telefonnummer i %s',
      "default": 'Vänligen mata in ett giltigt telefonnummer'
    },
    promise: {
      "default": 'Vänligen mata in ett giltigt värde'
    },
    regexp: {
      "default": 'Vänligen mata in ett värde som matchar uttrycket'
    },
    remote: {
      "default": 'Vänligen mata in ett giltigt värde'
    },
    rtn: {
      "default": 'Vänligen mata in ett giltigt RTN-nummer'
    },
    sedol: {
      "default": 'Vänligen mata in ett giltigt SEDOL-nummer'
    },
    siren: {
      "default": 'Vänligen mata in ett giltigt SIREN-nummer'
    },
    siret: {
      "default": 'Vänligen mata in ett giltigt SIRET-nummer'
    },
    step: {
      "default": 'Vänligen mata in ett giltigt steg av %s'
    },
    stringCase: {
      "default": 'Vänligen mata in endast små bokstäver',
      upper: 'Vänligen mata in endast stora bokstäver'
    },
    stringLength: {
      between: 'Vänligen mata in ett värde mellan %s och %s tecken långt',
      "default": 'Vänligen mata in ett värde med giltig längd',
      less: 'Vänligen mata in färre än %s tecken',
      more: 'Vänligen mata in fler än %s tecken'
    },
    uri: {
      "default": 'Vänligen mata in en giltig URI'
    },
    uuid: {
      "default": 'Vänligen mata in ett giltigt UUID-nummer',
      version: 'Vänligen mata in ett giltigt UUID-nummer av version %s'
    },
    vat: {
      countries: {
        AT: 'Österrike',
        BE: 'Belgien',
        BG: 'Bulgarien',
        BR: 'Brasilien',
        CH: 'Schweiz',
        CY: 'Cypern',
        CZ: 'Tjeckien',
        DE: 'Tyskland',
        DK: 'Danmark',
        EE: 'Estland',
        EL: 'Grekland',
        ES: 'Spanien',
        FI: 'Finland',
        FR: 'Frankrike',
        GB: 'Förenade Kungariket',
        GR: 'Grekland',
        HR: 'Kroatien',
        HU: 'Ungern',
        IE: 'Irland',
        IS: 'Island',
        IT: 'Italien',
        LT: 'Litauen',
        LU: 'Luxemburg',
        LV: 'Lettland',
        MT: 'Malta',
        NL: 'Nederländerna',
        NO: 'Norge',
        PL: 'Polen',
        PT: 'Portugal',
        RO: 'Rumänien',
        RS: 'Serbien',
        RU: 'Ryssland',
        SE: 'Sverige',
        SI: 'Slovenien',
        SK: 'Slovakien',
        VE: 'Venezuela',
        ZA: 'Sydafrika'
      },
      country: 'Vänligen mata in ett giltigt momsregistreringsnummer i %s',
      "default": 'Vänligen mata in ett giltigt momsregistreringsnummer'
    },
    vin: {
      "default": 'Vänligen mata in ett giltigt VIN-nummer'
    },
    zipCode: {
      countries: {
        AT: 'Österrike',
        BG: 'Bulgarien',
        BR: 'Brasilien',
        CA: 'Kanada',
        CH: 'Schweiz',
        CZ: 'Tjeckien',
        DE: 'Tyskland',
        DK: 'Danmark',
        ES: 'Spanien',
        FR: 'Frankrike',
        GB: 'Förenade Kungariket',
        IE: 'Irland',
        IN: 'Indien',
        IT: 'Italien',
        MA: 'Marocko',
        NL: 'Nederländerna',
        PL: 'Polen',
        PT: 'Portugal',
        RO: 'Rumänien',
        RU: 'Ryssland',
        SE: 'Sverige',
        SG: 'Singapore',
        SK: 'Slovakien',
        US: 'USA'
      },
      country: 'Vänligen mata in ett giltigt postnummer i %s',
      "default": 'Vänligen mata in ett giltigt postnummer'
    }
  };
  return sv_SE;
});

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module is referenced by other modules so it can't be inlined
/******/ 	var __webpack_exports__ = __webpack_require__("./resources/assets/vendor/libs/formvalidation/dist/js/locales/sv_SE.js");
/******/ 	
/******/ 	return __webpack_exports__;
/******/ })()
;
});