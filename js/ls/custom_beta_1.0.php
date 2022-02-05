<?php
header("Content-Type: application/javascript"); // ! ! ! Do not cache
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

function JSMinify($minOutput){
    $minOutput = preg_replace(array("/\s+\n/", "/\n\s+/", "/ +/"), array("\n", " ", " "), $minOutput);
    return $minOutput;
}
ob_start('JSMinify');
?>
/*
 jQuery v1.11.1 | (c) 2005, 2014 jQuery Foundation, Inc. | jquery.org/license  jQuery Color v@2.1.2 http://github.com/jquery/jquery-color | jquery.org/license */
!
function(b, h) {
  "object" == typeof module && "object" == typeof module.exports ? module.exports = b.document ? h(b, !0) : function(f) {
    if (!f.document) throw Error("jQuery requires a window with a document");
    return h(f)
  } : h(b)
}("undefined" != typeof window ? window : this, function(b, h) {
  function f(a) {
    var c = a.length,
        d = e.type(a);
    return "function" === d || e.isWindow(a) ? !1 : 1 === a.nodeType && c ? !0 : "array" === d || 0 === c || "number" == typeof c && 0 < c && c - 1 in a
  }
  function p(a, c, d) {
    if (e.isFunction(c)) return e.grep(a, function(g, k) {
      return !!c.call(g, k, g) !== d
    });
    if (c.nodeType) return e.grep(a, function(g) {
      return g === c !== d
    });
    if ("string" == typeof c) {
      if (Pc.test(c)) return e.filter(c, a, d);
      c = e.filter(c, a)
    }
    return e.grep(a, function(g) {
      return 0 <= e.inArray(g, c) !== d
    })
  }
  function n(a, c) {
    do a = a[c];
    while (a && 1 !== a.nodeType);
    return a
  }
  function m(a) {
    var c = gc[a] = {};
    return e.each(a.match(Va) || [], function(d, g) {
      c[g] = !0
    }), c
  }
  function t() {
    Y.addEventListener ? (Y.removeEventListener("DOMContentLoaded", u, !1), b.removeEventListener("load", u, !1)) : (Y.detachEvent("onreadystatechange", u), b.detachEvent("onload", u))
  }
  function u() {
    (Y.addEventListener || "load" === event.type || "complete" === Y.readyState) && (t(), e.ready())
  }
  function B(a, c, d) {
    if (void 0 === d && 1 === a.nodeType) {
      var g = "data-" + c.replace(Qc, "-$1").toLowerCase();
      if (d = a.getAttribute(g), "string" == typeof d) {
        try {
          d = "true" === d ? !0 : "false" === d ? !1 : "null" === d ? null : +d + "" === d ? +d : Rc.test(d) ? e.parseJSON(d) : d
        } catch (k) {}
        e.data(a, c, d)
      } else d = void 0
    }
    return d
  }
  function y(a) {
    for (var c in a) if (("data" !== c || !e.isEmptyObject(a[c])) && "toJSON" !== c) return !1;
    return !0
  }

  function H(a, c, d, g) {
    if (e.acceptData(a)) {
      var k, l, q = e.expando,
          v = a.nodeType,
          z = v ? e.cache : a,
          G = v ? a[q] : a[q] && q;
      if (G && z[G] && (g || z[G].data) || void 0 !== d || "string" != typeof c) return G || (G = v ? a[q] = Ya.pop() || e.guid++ : q), z[G] || (z[G] = v ? {} : {
        toJSON: e.noop
      }), ("object" == typeof c || "function" == typeof c) && (g ? z[G] = e.extend(z[G], c) : z[G].data = e.extend(z[G].data, c)), l = z[G], g || (l.data || (l.data = {}), l = l.data), void 0 !== d && (l[e.camelCase(c)] = d), "string" == typeof c ? (k = l[c], null == k && (k = l[e.camelCase(c)])) : k = l, k
    }
  }
  function D(a, c, d) {
    if (e.acceptData(a)) {
      var g, k, l = a.nodeType,
          q = l ? e.cache : a,
          v = l ? a[e.expando] : e.expando;
      if (q[v]) {
        if (c && (g = d ? q[v] : q[v].data)) {
          e.isArray(c) ? c = c.concat(e.map(c, e.camelCase)) : c in g ? c = [c] : (c = e.camelCase(c), c = c in g ? [c] : c.split(" "));
          for (k = c.length; k--;) delete g[c[k]];
          if (d ? !y(g) : !e.isEmptyObject(g)) return
        }(d || (delete q[v].data, y(q[v]))) && (l ? e.cleanData([a], !0) : T.deleteExpando || q != q.window ? delete q[v] : q[v] = null)
      }
    }
  }
  function F() {
    return !0
  }
  function R() {
    return !1
  }
  function E() {
    try {
      return Y.activeElement
    } catch (a) {}
  }
  function P(a) {
    var c = hc.split("|");
    a = a.createDocumentFragment();
    if (a.createElement) for (; c.length;) a.createElement(c.pop());
    return a
  }
  function I(a, c) {
    var d, g, k = 0,
        l = "undefined" !== typeof a.getElementsByTagName ? a.getElementsByTagName(c || "*") : "undefined" !== typeof a.querySelectorAll ? a.querySelectorAll(c || "*") : void 0;
    if (!l) for (l = [], d = a.childNodes || a; null != (g = d[k]); k++)!c || e.nodeName(g, c) ? l.push(g) : e.merge(l, I(g, c));
    return void 0 === c || c && e.nodeName(a, c) ? e.merge([a], l) : l
  }
  function O(a) {
    Pb.test(a.type) && (a.defaultChecked = a.checked)
  }
  function Z(a, c) {
    return e.nodeName(a, "table") && e.nodeName(11 !== c.nodeType ? c : c.firstChild, "tr") ? a.getElementsByTagName("tbody")[0] || a.appendChild(a.ownerDocument.createElement("tbody")) : a
  }
  function da(a) {
    return a.type = (null !== e.find.attr(a, "type")) + "/" + a.type, a
  }
  function N(a) {
    var c = Sc.exec(a.type);
    return c ? a.type = c[1] : a.removeAttribute("type"), a
  }
  function Q(a, c) {
    for (var d, g = 0; null != (d = a[g]); g++) e._data(d, "globalEval", !c || e._data(c[g], "globalEval"))
  }
  function S(a, c) {
    if (1 === c.nodeType && e.hasData(a)) {
      var d, g;
      var k = e._data(a);
      var l = e._data(c, k),
          q = k.events;
      if (q) for (d in delete l.handle, l.events = {}, q) for (k = 0, g = q[d].length; g > k; k++) e.event.add(c, d, q[d][k]);
      l.data && (l.data = e.extend({}, l.data))
    }
  }
  function W(a, c) {
    var d, g = e(c.createElement(a)).appendTo(c.body),
        k = b.getDefaultComputedStyle && (d = b.getDefaultComputedStyle(g[0])) ? d.display : e.css(g[0], "display");
    return g.detach(), k
  }
  function aa(a) {
    var c = Y,
        d = ic[a];
    return d || (d = W(a, c), "none" !== d && d || (vb = (vb || e("<iframe frameborder='0' width='0' height='0'/>")).appendTo(c.documentElement), c = (vb[0].contentWindow || vb[0].contentDocument).document, c.write(), c.close(), d = W(a, c), vb.detach()), ic[a] = d), d
  }
  function oa(a, c) {
    return {
      get: function() {
        var d = a();
        if (null != d) return d ? void delete this.get : (this.get = c).apply(this, arguments)
      }
    }
  }
  function na(a, c) {
    if (c in a) return c;
    for (var d = c.charAt(0).toUpperCase() + c.slice(1), g = c, k = jc.length; k--;) if (c = jc[k] + d, c in a) return c;
    return g
  }
  function wa(a, c) {
    for (var d, g, k, l = [], q = 0, v = a.length; v > q; q++) g = a[q], g.style && (l[q] = e._data(g, "olddisplay"), d = g.style.display, c ? (l[q] || "none" !== d || (g.style.display = ""), "" === g.style.display && wb(g) && (l[q] = e._data(g, "olddisplay", aa(g.nodeName)))) : (k = wb(g), (d && "none" !== d || !k) && e._data(g, "olddisplay", k ? d : e.css(g, "display"))));
    for (q = 0; v > q; q++) g = a[q], g.style && (c && "none" !== g.style.display && "" !== g.style.display || (g.style.display = c ? l[q] || "" : "none"));
    return a
  }
  function mb(a, c, d) {
    return (a = Tc.exec(c)) ? Math.max(0, a[1] - (d || 0)) + (a[2] || "px") : c
  }
  function Za(a, c, d, g, k) {
    c = d === (g ? "border" : "content") ? 4 : "width" === c ? 1 : 0;
    for (var l = 0; 4 > c; c += 2)"margin" === d && (l += e.css(a, d + eb[c], !0, k)), g ? ("content" === d && (l -= e.css(a, "padding" + eb[c], !0, k)), "margin" !== d && (l -= e.css(a, "border" + eb[c] + "Width", !0, k))) : (l += e.css(a, "padding" + eb[c], !0, k), "padding" !== d && (l += e.css(a, "border" + eb[c] + "Width", !0, k)));
    return l
  }
  function Da(a, c, d) {
    var g = !0,
        k = "width" === c ? a.offsetWidth : a.offsetHeight,
        l = fb(a),
        q = T.boxSizing && "border-box" === e.css(a, "boxSizing", !1, l);
    if (0 >= k || null == k) {
      if (k = gb(a, c, l), (0 > k || null == k) && (k = a.style[c]), Ab.test(k)) return k;
      g = q && (T.boxSizingReliable() || k === a.style[c]);
      k = parseFloat(k) || 0
    }
    return k + Za(a, c, d || (q ? "border" : "content"), g, l) + "px"
  }
  function pa(a, c, d, g, k) {
    return new pa.prototype.init(a, c, d, g, k)
  }
  function Bb() {
    return setTimeout(function() {
      nb = void 0
    }), nb = e.now()
  }
  function ob(a, c) {
    var d = {
      height: a
    },
        g = 0;
    for (c = c ? 1 : 0; 4 > g; g += 2 - c) {
      var k = eb[g];
      d["margin" + k] = d["padding" + k] = a
    }
    return c && (d.opacity = d.width = a), d
  }
  function pb(a, c, d) {
    for (var g, k = (xb[c] || []).concat(xb["*"]), l = 0, q = k.length; q > l; l++) if (g = k[l].call(d, c, a)) return g
  }
  function yb(a, c) {
    var d, g, k, l, q;
    for (d in a) if (g = e.camelCase(d), k = c[g], l = a[d], e.isArray(l) && (k = l[1], l = a[d] = l[0]), d !== g && (a[g] = l, delete a[d]), q = e.cssHooks[g], q && "expand" in q) for (d in l = q.expand(l), delete a[g], l) d in a || (a[d] = l[d], c[d] = k);
    else c[g] = k
  }
  function kc(a, c, d) {
    var g, k = 0,
        l = Cb.length,
        q = e.Deferred().always(function() {
        delete v.elem
      }),
        v = function() {
        if (g) return !1;
        var G = nb || Bb();
        G = Math.max(0, z.startTime + z.duration - G);
        for (var A = 1 - (G / z.duration || 0), L = 0, U = z.tweens.length; U > L; L++) z.tweens[L].run(A);
        return q.notifyWith(a, [z, A, G]), 1 > A && U ? G : (q.resolveWith(a, [z]), !1)
        },
        z = q.promise({
        elem: a,
        props: e.extend({}, c),
        opts: e.extend(!0, {
          specialEasing: {}
        }, d),
        originalProperties: c,
        originalOptions: d,
        startTime: nb || Bb(),
        duration: d.duration,
        tweens: [],
        createTween: function(G, A) {
          var L = e.Tween(a, z.opts, G, A, z.opts.specialEasing[G] || z.opts.easing);
          return z.tweens.push(L), L
        },
        stop: function(G) {
          var A = 0,
              L = G ? z.tweens.length : 0;
          if (g) return this;
          for (g = !0; L > A; A++) z.tweens[A].run(1);
          return G ? q.resolveWith(a, [z, G]) : q.rejectWith(a, [z, G]), this
        }
      });
    d = z.props;
    for (yb(d, z.opts.specialEasing); l > k; k++) if (c =
    Cb[k].call(z, a, d, z.opts)) return c;
    return e.map(d, pb, z), e.isFunction(z.opts.start) && z.opts.start.call(a, z), e.fx.timer(e.extend(v, {
      elem: a,
      anim: z,
      queue: z.opts.queue
    })), z.progress(z.opts.progress).done(z.opts.done, z.opts.complete).fail(z.opts.fail).always(z.opts.always)
  }
  function lc(a) {
    return function(c, d) {
      "string" != typeof c && (d = c, c = "*");
      var g, k = 0,
          l = c.toLowerCase().match(Va) || [];
      if (e.isFunction(d)) for (; g = l[k++];)"+" === g.charAt(0) ? (g = g.slice(1) || "*", (a[g] = a[g] || []).unshift(d)) : (a[g] = a[g] || []).push(d)
    }
  }

  function mc(a, c, d, g) {
    function k(v) {
      var z;
      return l[v] = !0, e.each(a[v] || [], function(G, A) {
        var L = A(c, d, g);
        return "string" != typeof L || q || l[L] ? q ? !(z = L) : void 0 : (c.dataTypes.unshift(L), k(L), !1)
      }), z
    }
    var l = {},
        q = a === Qb;
    return k(c.dataTypes[0]) || !l["*"] && k("*")
  }
  function Rb(a, c) {
    var d, g, k = e.ajaxSettings.flatOptions || {};
    for (g in c) void 0 !== c[g] && ((k[g] ? a : d || (d = {}))[g] = c[g]);
    return d && e.extend(!0, a, d), a
  }
  function Sb(a, c, d, g) {
    var k;
    if (e.isArray(c)) e.each(c, function(l, q) {
      d || Uc.test(a) ? g(a, q) : Sb(a + "[" + ("object" == typeof q ? l : "") + "]", q, d, g)
    });
    else if (d || "object" !== e.type(c)) g(a, c);
    else
    for (k in c) Sb(a + "[" + k + "]", c[k], d, g)
  }
  function nc() {
    try {
      return new b.XMLHttpRequest
    } catch (a) {}
  }
  function oc(a) {
    return e.isWindow(a) ? a : 9 === a.nodeType ? a.defaultView || a.parentWindow : !1
  }
  var Ya = [],
      $a = Ya.slice,
      pc = Ya.concat,
      Tb = Ya.push,
      qc = Ya.indexOf,
      Db = {},
      Vc = Db.toString,
      qb = Db.hasOwnProperty,
      T = {},
      e = function(a, c) {
      return new e.fn.init(a, c)
      },
      Wc = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g,
      Xc = /^-ms-/,
      Yc = /-([\da-z])/gi,
      Zc = function(a, c) {
      return c.toUpperCase()
      };
  e.fn = e.prototype = {
    jquery: "1.11.1",
    constructor: e,
    selector: "",
    length: 0,
    toArray: function() {
      return $a.call(this)
    },
    get: function(a) {
      return null != a ? 0 > a ? this[a + this.length] : this[a] : $a.call(this)
    },
    pushStack: function(a) {
      a = e.merge(this.constructor(), a);
      return a.prevObject = this, a.context = this.context, a
    },
    each: function(a, c) {
      return e.each(this, a, c)
    },
    map: function(a) {
      return this.pushStack(e.map(this, function(c, d) {
        return a.call(c, d, c)
      }))
    },
    slice: function() {
      return this.pushStack($a.apply(this, arguments))
    },
    first: function() {
      return this.eq(0)
    },
    last: function() {
      return this.eq(-1)
    },
    eq: function(a) {
      var c = this.length;
      a = +a + (0 > a ? c : 0);
      return this.pushStack(0 <= a && c > a ? [this[a]] : [])
    },
    end: function() {
      return this.prevObject || this.constructor(null)
    },
    push: Tb,
    sort: Ya.sort,
    splice: Ya.splice
  };
  e.extend = e.fn.extend = function() {
    var a, c, d, g, k = arguments[0] || {},
        l = 1,
        q = arguments.length,
        v = !1;
    "boolean" == typeof k && (v = k, k = arguments[l] || {}, l++);
    "object" == typeof k || e.isFunction(k) || (k = {});
    for (l === q && (k = this, l--); q > l; l++) if (null != (d = arguments[l])) for (c in d) {
      var z = k[c];
      var G =
      d[c];
      k !== G && (v && G && (e.isPlainObject(G) || (a = e.isArray(G))) ? (a ? (a = !1, g = z && e.isArray(z) ? z : []) : g = z && e.isPlainObject(z) ? z : {}, k[c] = e.extend(v, g, G)) : void 0 !== G && (k[c] = G))
    }
    return k
  };
  e.extend({
    expando: "jQuery" + ("1.11.1" + Math.random()).replace(/\D/g, ""),
    isReady: !0,
    error: function(a) {
      throw Error(a);
    },
    noop: function() {},
    isFunction: function(a) {
      return "function" === e.type(a)
    },
    isArray: Array.isArray ||
    function(a) {
      return "array" === e.type(a)
    },
    isWindow: function(a) {
      return null != a && a == a.window
    },
    isNumeric: function(a) {
      return !e.isArray(a) && 0 <= a - parseFloat(a)
    },
    isEmptyObject: function(a) {
      for (var c in a) return !1;
      return !0
    },
    isPlainObject: function(a) {
      var c;
      if (!a || "object" !== e.type(a) || a.nodeType || e.isWindow(a)) return !1;
      try {
        if (a.constructor && !qb.call(a, "constructor") && !qb.call(a.constructor.prototype, "isPrototypeOf")) return !1
      } catch (d) {
        return !1
      }
      if (T.ownLast) for (c in a) return qb.call(a, c);
      for (c in a);
      return void 0 === c || qb.call(a, c)
    },
    type: function(a) {
      return null == a ? a + "" : "object" == typeof a || "function" == typeof a ? Db[Vc.call(a)] || "object" : typeof a
    },
    globalEval: function(a) {
      a && e.trim(a) && (b.execScript ||
      function(c) {
        b.eval.call(b, c)
      })(a)
    },
    camelCase: function(a) {
      return a.replace(Xc, "ms-").replace(Yc, Zc)
    },
    nodeName: function(a, c) {
      return a.nodeName && a.nodeName.toLowerCase() === c.toLowerCase()
    },
    each: function(a, c, d) {
      var g, k = 0,
          l = a.length,
          q = f(a);
      if (d) if (q) for (; l > k && (g = c.apply(a[k], d), !1 !== g); k++);
      else
      for (k in a) {
        if (g = c.apply(a[k], d), !1 === g) break
      } else if (q) for (; l > k && (g = c.call(a[k], k, a[k]), !1 !== g); k++);
      else
      for (k in a) if (g = c.call(a[k], k, a[k]), !1 === g) break;
      return a
    },
    trim: function(a) {
      return null == a ? "" : (a + "").replace(Wc, "")
    },
    makeArray: function(a, c) {
      var d = c || [];
      return null != a && (f(Object(a)) ? e.merge(d, "string" == typeof a ? [a] : a) : Tb.call(d, a)), d
    },
    inArray: function(a, c, d) {
      if (c) {
        if (qc) return qc.call(c, a, d);
        var g = c.length;
        for (d = d ? 0 > d ? Math.max(0, g + d) : d : 0; g > d; d++) if (d in c && c[d] === a) return d
      }
      return -1
    },
    merge: function(a, c) {
      for (var d = +c.length, g = 0, k = a.length; d > g;) a[k++] = c[g++];
      if (d !== d) for (; void 0 !== c[g];) a[k++] = c[g++];
      return a.length = k, a
    },
    grep: function(a, c, d) {
      for (var g = [], k = 0, l = a.length, q = !d; l > k; k++) d = !c(a[k], k), d !== q && g.push(a[k]);
      return g
    },
    map: function(a, c, d) {
      var g = 0,
          k = a.length,
          l = [];
      if (f(a)) for (; k > g; g++) {
        var q = c(a[g], g, d);
        null != q && l.push(q)
      } else
      for (g in a) q = c(a[g], g, d), null != q && l.push(q);
      return pc.apply([], l)
    },
    guid: 1,
    proxy: function(a, c) {
      var d, g, k;
      return "string" == typeof c && (k = a[c], c = a, a = k), e.isFunction(a) ? (d = $a.call(arguments, 2), g = function() {
        return a.apply(c || this, d.concat($a.call(arguments)))
      }, g.guid = a.guid = a.guid || e.guid++, g) : void 0
    },
    now: function() {
      return +new Date
    },
    support: T
  });
  e.each("Boolean Number String Function Array Date RegExp Object Error".split(" "), function(a, c) {
    Db["[object " + c + "]"] = c.toLowerCase()
  });
  var sb = function(a) {
    function c(r, w, x, C) {
      var J, K, M, X, V;
      if ((w ? w.ownerDocument || w : Ea) !== sa && hb(w), w = w || sa, x = x || [], !r || "string" != typeof r) return x;
      if (1 !== (X = w.nodeType) && 9 !== X) return [];
      if (Ia && !C) {
        if (J = $c.exec(r)) if (M = J[1]) if (9 === X) {
          if (K = w.getElementById(M), !K || !K.parentNode) return x;
          if (K.id === M) return x.push(K), x
        } else {
          if (w.ownerDocument && (K = w.ownerDocument.getElementById(M)) && Oa(w, K) && K.id === M) return x.push(K), x
        } else {
          if (J[2]) return ab.apply(x, w.getElementsByTagName(r)), x;
          if ((M = J[3]) && xa.getElementsByClassName && w.getElementsByClassName) return ab.apply(x, w.getElementsByClassName(M)), x
        }
        if (xa.qsa && (!za || !za.test(r))) {
          if (K = J = ka, M = w, V = 9 === X && r, 1 === X && "object" !== w.nodeName.toLowerCase()) {
            X = Eb(r);
            (J = w.getAttribute("id")) ? K = J.replace(ad, "\\$&") : w.setAttribute("id", K);
            K = "[id='" + K + "'] ";
            for (M = X.length; M--;) X[M] = K + U(X[M]);
            M = Ub.test(r) && A(w.parentNode) || w;
            V = X.join(",")
          }
          if (V) try {
            return ab.apply(x, M.querySelectorAll(V)), x
          } catch (ea) {} finally {
            J || w.removeAttribute("id")
          }
        }
      }
      return Ka(r.replace(Fb, "$1"), w, x, C)
    }
    function d() {
      function r(x, C) {
        return w.push(x + " ") > la.cacheLength && delete r[w.shift()], r[x + " "] = C
      }
      var w = [];
      return r
    }
    function g(r) {
      return r[ka] = !0, r
    }
    function k(r) {
      var w = sa.createElement("div");
      try {
        return !!r(w)
      } catch (x) {
        return !1
      } finally {
        w.parentNode && w.parentNode.removeChild(w)
      }
    }
    function l(r, w) {
      for (var x = r.split("|"), C = r.length; C--;) la.attrHandle[x[C]] = w
    }
    function q(r, w) {
      var x = w && r,
          C = x && 1 === r.nodeType && 1 === w.nodeType && (~w.sourceIndex || -2147483648) - (~r.sourceIndex || -2147483648);
      if (C) return C;
      if (x) for (; x = x.nextSibling;) if (x === w) return -1;
      return r ? 1 : -1
    }
    function v(r) {
      return function(w) {
        return "input" === w.nodeName.toLowerCase() && w.type === r
      }
    }
    function z(r) {
      return function(w) {
        var x = w.nodeName.toLowerCase();
        return ("input" === x || "button" === x) && w.type === r
      }
    }
    function G(r) {
      return g(function(w) {
        return w = +w, g(function(x, C) {
          for (var J, K = r([], x.length, w), M = K.length; M--;) x[J = K[M]] && (x[J] = !(C[J] = x[J]))
        })
      })
    }
    function A(r) {
      return r && "undefined" !== typeof r.getElementsByTagName && r
    }
    function L() {}
    function U(r) {
      for (var w = 0, x = r.length, C = ""; x > w; w++) C += r[w].value;
      return C
    }
    function ba(r, w, x) {
      var C = w.dir,
          J = x && "parentNode" === C,
          K = ta++;
      return w.first ?
      function(M, X, V) {
        for (; M = M[C];) if (1 === M.nodeType || J) return r(M, X, V)
      } : function(M, X, V) {
        var ea, fa, ja = [Aa, K];
        if (V) for (; M = M[C];) {
          if ((1 === M.nodeType || J) && r(M, X, V)) return !0
        } else
        for (; M = M[C];) if (1 === M.nodeType || J) {
          if (fa = M[ka] || (M[ka] = {}), (ea = fa[C]) && ea[0] === Aa && ea[1] === K) return ja[2] = ea[2];
          if (fa[C] = ja, ja[2] = r(M, X, V)) return !0
        }
      }
    }
    function ca(r) {
      return 1 < r.length ?
      function(w, x, C) {
        for (var J = r.length; J--;) if (!r[J](w, x, C)) return !1;
        return !0
      } : r[0]
    }
    function ya(r, w, x, C, J) {
      for (var K, M = [], X = 0, V = r.length, ea = null != w; V > X; X++)(K = r[X]) && (!x || x(K, C, J)) && (M.push(K), ea && w.push(X));
      return M
    }
    function Ba(r, w, x, C, J, K) {
      return C && !C[ka] && (C = Ba(C)), J && !J[ka] && (J = Ba(J, K)), g(function(M, X, V, ea) {
        var fa, ja = [],
            Ca = [],
            Sa = X.length,
            qa;
        if (!(qa = M)) {
          qa = w || "*";
          for (var ma = V.nodeType ? [V] : V, Fa = [], Ga = 0, Gb = ma.length; Gb > Ga; Ga++) c(qa, ma[Ga], Fa);
          qa = Fa
        }
        qa = !r || !M && w ? qa : ya(qa, ja, r, V, ea);
        ma = x ? J || (M ? r : Sa || C) ? [] : X : qa;
        if (x && x(qa, ma, V, ea), C) {
          var Pa = ya(ma, Ca);
          C(Pa, [], V, ea);
          for (V = Pa.length; V--;)(fa = Pa[V]) && (ma[Ca[V]] = !(qa[Ca[V]] = fa))
        }
        if (M) {
          if (J || r) {
            if (J) {
              Pa = [];
              for (V = ma.length; V--;)(fa = ma[V]) && Pa.push(qa[V] = fa);
              J(null, ma = [], Pa, ea)
            }
            for (V = ma.length; V--;)(fa = ma[V]) && -1 < (Pa = J ? ib.call(M, fa) : ja[V]) && (M[Pa] = !(X[Pa] = fa))
          }
        } else ma = ya(ma === X ? ma.splice(Sa, ma.length) : ma), J ? J(null, X, ma, ea) : ab.apply(X, ma)
      })
    }
    function Wa(r) {
      var w, x, C = r.length,
          J = la.relative[r[0].type];
      var K = J || la.relative[" "];
      for (var M = J ? 1 : 0, X = ba(function(fa) {
        return fa === w
      }, K, !0), V = ba(function(fa) {
        return -1 < ib.call(w, fa)
      }, K, !0), ea = [function(fa, ja, Ca) {
        return !J && (Ca || ja !== ia) || ((w = ja).nodeType ? X(fa, ja, Ca) : V(fa, ja, Ca))
      }]; C > M; M++) if (K = la.relative[r[M].type]) ea = [ba(ca(ea), K)];
      else {
        if (K = la.filter[r[M].type].apply(null, r[M].matches), K[ka]) {
          for (x = ++M; C > x && !la.relative[r[x].type]; x++);
          return Ba(1 < M && ca(ea), 1 < M && U(r.slice(0, M - 1).concat({
            value: " " === r[M - 2].type ? "*" : ""
          })).replace(Fb, "$1"), K, x > M && Wa(r.slice(M, x)), C > x && Wa(r = r.slice(x)), C > x && U(r))
        }
        ea.push(K)
      }
      return ca(ea)
    }
    function Na(r, w) {
      var x = 0 < w.length,
          C = 0 < r.length,
          J = function(K, M, X, V, ea) {
          var fa, ja, Ca, Sa = 0,
              qa = "0",
              ma = K && [],
              Fa = [],
              Ga = ia,
              Gb = K || C && la.find.TAG("*", ea),
              Pa = Aa += null == Ga ? 1 : Math.random() || .1,
              bd = Gb.length;
          for (ea && (ia = M !== sa && M); qa !== bd && null != (fa = Gb[qa]); qa++) {
            if (C && fa) {
              for (ja = 0; Ca = r[ja++];) if (Ca(fa, M, X)) {
                V.push(fa);
                break
              }
              ea && (Aa = Pa)
            }
            x && ((fa = !Ca && fa) && Sa--, K && ma.push(fa))
          }
          if (Sa += qa, x && qa !== Sa) {
            for (ja = 0; Ca = w[ja++];) Ca(ma, Fa, M, X);
            if (K) {
              if (0 < Sa) for (; qa--;) ma[qa] || Fa[qa] || (Fa[qa] = Vb.call(V));
              Fa = ya(Fa)
            }
            ab.apply(V, Fa);
            ea && !K && 0 < Fa.length && 1 < Sa + w.length && c.uniqueSort(V)
          }
          return ea && (Aa = Pa, ia = Ga), ma
          };
      return x ? g(J) : J
    }
    var Xa, ha, Ka, ia, ra, ua, sa, Ma, Ia, za, Ha, va, Oa, ka = "sizzle" + -new Date,
        Ea = a.document,
        Aa = 0,
        ta = 0,
        rb = d(),
        Qa = d(),
        Ja = d(),
        Ta = function(r, w) {
        return r === w && (ua = !0), 0
        },
        Ua = {}.hasOwnProperty,
        La = [],
        Vb = La.pop,
        cd = La.push,
        ab = La.push,
        rc = La.slice,
        ib = La.indexOf ||
        function(r) {
        for (var w = 0, x = this.length; x > w; w++) if (this[w] === r) return w;
        return -1
        },
        tc = "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+".replace("w", "w#"),
        uc = "\\[[\\x20\\t\\r\\n\\f]*((?:\\\\.|[\\w-]|[^\\x00-\\xa0])+)(?:[\\x20\\t\\r\\n\\f]*([*^$|!~]?=)[\\x20\\t\\r\\n\\f]*(?:'((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\"|(" + tc + "))|)[\\x20\\t\\r\\n\\f]*\\]",
        Wb = ":((?:\\\\.|[\\w-]|[^\\x00-\\xa0])+)(?:\\((('((?:\\\\.|[^\\\\'])*)'|\"((?:\\\\.|[^\\\\\"])*)\")|((?:\\\\.|[^\\\\()[\\]]|" + uc + ")*)|.*)\\)|)",
        Fb = RegExp("^[\\x20\\t\\r\\n\\f]+|((?:^|[^\\\\])(?:\\\\.)*)[\\x20\\t\\r\\n\\f]+$", "g"),
        dd = /^[\x20\t\r\n\f]*,[\x20\t\r\n\f]*/,
        ed = /^[\x20\t\r\n\f]*([>+~]|[\x20\t\r\n\f])[\x20\t\r\n\f]*/,
        fd = RegExp("=[\\x20\\t\\r\\n\\f]*([^\\]'\"]*?)[\\x20\\t\\r\\n\\f]*\\]", "g"),
        gd = new RegExp(Wb),
        hd = new RegExp("^" + tc + "$"),
        Hb = {
        ID: /^#((?:\\.|[\w-]|[^\x00-\xa0])+)/,
        CLASS: /^\.((?:\\.|[\w-]|[^\x00-\xa0])+)/,
        TAG: new RegExp("^(" + "(?:\\\\.|[\\w-]|[^\\x00-\\xa0])+".replace("w", "w*") + ")"),
        ATTR: new RegExp("^" + uc),
        PSEUDO: new RegExp("^" + Wb),
        CHILD: /^:(only|first|last|nth|nth-last)-(child|of-type)(?:\([\x20\t\r\n\f]*(even|odd|(([+-]|)(\d*)n|)[\x20\t\r\n\f]*(?:([+-]|)[\x20\t\r\n\f]*(\d+)|))[\x20\t\r\n\f]*\)|)/i,
        bool: /^(?:checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped)$/i,
        needsContext: /^[\x20\t\r\n\f]*[>+~]|:(even|odd|eq|gt|lt|nth|first|last)(?:\([\x20\t\r\n\f]*((?:-\d)?\d*)[\x20\t\r\n\f]*\)|)(?=[^-]|$)/i
        },
        jd = /^(?:input|select|textarea|button)$/i,
        kd = /^h\d$/i,
        zb = /^[^{]+\{\s*\[native \w/,
        $c = /^(?:#([\w-]+)|(\w+)|\.([\w-]+))$/,
        Ub = /[+~]/,
        ad = /'|\\/g,
        bb = RegExp("\\\\([\\da-f]{1,6}[\\x20\\t\\r\\n\\f]?|([\\x20\\t\\r\\n\\f])|.)", "ig"),
        cb = function(r, w, x) {
        r = "0x" + w - 65536;
        return r !== r || x ? w : 0 > r ? String.fromCharCode(r + 65536) : String.fromCharCode(r >> 10 | 55296, 1023 & r | 56320)
        };
    try {
      ab.apply(La =
      rc.call(Ea.childNodes), Ea.childNodes), La[Ea.childNodes.length].nodeType
    } catch (r) {
      ab = {
        apply: La.length ?
        function(w, x) {
          cd.apply(w, rc.call(x))
        } : function(w, x) {
          for (var C = w.length, J = 0; w[C++] = x[J++];);
          w.length = C - 1
        }
      }
    }
    var xa = c.support = {};
    var ld = c.isXML = function(r) {
      return (r = r && (r.ownerDocument || r).documentElement) ? "HTML" !== r.nodeName : !1
    };
    var hb = c.setDocument = function(r) {
      var w, x = r ? r.ownerDocument || r : Ea;
      r = x.defaultView;
      return x !== sa && 9 === x.nodeType && x.documentElement ? (sa = x, Ma = x.documentElement, Ia = !ld(x), r && r !== r.top && (r.addEventListener ? r.addEventListener("unload", function() {
        hb()
      }, !1) : r.attachEvent && r.attachEvent("onunload", function() {
        hb()
      })), xa.attributes = k(function(C) {
        return C.className = "i", !C.getAttribute("className")
      }), xa.getElementsByTagName = k(function(C) {
        return C.appendChild(x.createComment("")), !C.getElementsByTagName("*").length
      }), xa.getElementsByClassName = zb.test(x.getElementsByClassName) && k(function(C) {
        return C.innerHTML = "<div class='a'></div><div class='a i'></div>", C.firstChild.className = "i", 2 === C.getElementsByClassName("i").length
      }), xa.getById = k(function(C) {
        return Ma.appendChild(C).id = ka, !x.getElementsByName || !x.getElementsByName(ka).length
      }), xa.getById ? (la.find.ID = function(C, J) {
        if ("undefined" !== typeof J.getElementById && Ia) {
          var K = J.getElementById(C);
          return K && K.parentNode ? [K] : []
        }
      }, la.filter.ID = function(C) {
        var J = C.replace(bb, cb);
        return function(K) {
          return K.getAttribute("id") === J
        }
      }) : (delete la.find.ID, la.filter.ID = function(C) {
        var J = C.replace(bb, cb);
        return function(K) {
          return (K = "undefined" !== typeof K.getAttributeNode && K.getAttributeNode("id")) && K.value === J
        }
      }), la.find.TAG = xa.getElementsByTagName ?
      function(C, J) {
        return "undefined" !== typeof J.getElementsByTagName ? J.getElementsByTagName(C) : void 0
      } : function(C, J) {
        var K, M = [],
            X = 0,
            V = J.getElementsByTagName(C);
        if ("*" === C) {
          for (; K = V[X++];) 1 === K.nodeType && M.push(K);
          return M
        }
        return V
      }, la.find.CLASS = xa.getElementsByClassName &&
      function(C, J) {
        return "undefined" !== typeof J.getElementsByClassName && Ia ? J.getElementsByClassName(C) : void 0
      }, Ha = [], za = [], (xa.qsa = zb.test(x.querySelectorAll)) && (k(function(C) {
        C.innerHTML = "<select msallowclip=''><option selected=''></option></select>";
        C.querySelectorAll("[msallowclip^='']").length && za.push("[*^$]=[\\x20\\t\\r\\n\\f]*(?:''|\"\")");
        C.querySelectorAll("[selected]").length || za.push("\\[[\\x20\\t\\r\\n\\f]*(?:value|checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped)");
        C.querySelectorAll(":checked").length || za.push(":checked")
      }), k(function(C) {
        var J = x.createElement("input");
        J.setAttribute("type", "hidden");
        C.appendChild(J).setAttribute("name", "D");
        C.querySelectorAll("[name=d]").length && za.push("name[\\x20\\t\\r\\n\\f]*[*^$|!~]?=");
        C.querySelectorAll(":enabled").length || za.push(":enabled", ":disabled");
        C.querySelectorAll("*,:x");
        za.push(",.*:")
      })), (xa.matchesSelector = zb.test(va = Ma.matches || Ma.webkitMatchesSelector || Ma.mozMatchesSelector || Ma.oMatchesSelector || Ma.msMatchesSelector)) && k(function(C) {
        xa.disconnectedMatch = va.call(C, "div");
        va.call(C, "[s!='']:x");
        Ha.push("!=", Wb)
      }), za = za.length && new RegExp(za.join("|")), Ha = Ha.length && new RegExp(Ha.join("|")), w = zb.test(Ma.compareDocumentPosition), Oa = w || zb.test(Ma.contains) ?
      function(C, J) {
        var K = 9 === C.nodeType ? C.documentElement : C,
            M = J && J.parentNode;
        return C === M || !(!M || 1 !== M.nodeType || !(K.contains ? K.contains(M) : C.compareDocumentPosition && 16 & C.compareDocumentPosition(M)))
      } : function(C, J) {
        if (J) for (; J = J.parentNode;) if (J === C) return !0;
        return !1
      }, Ta = w ?
      function(C, J) {
        if (C === J) return ua = !0, 0;
        var K = !C.compareDocumentPosition - !J.compareDocumentPosition;
        return K ? K : (K = (C.ownerDocument || C) === (J.ownerDocument || J) ? C.compareDocumentPosition(J) : 1, 1 & K || !xa.sortDetached && J.compareDocumentPosition(C) === K ? C === x || C.ownerDocument === Ea && Oa(Ea, C) ? -1 : J === x || J.ownerDocument === Ea && Oa(Ea, J) ? 1 : ra ? ib.call(ra, C) - ib.call(ra, J) : 0 : 4 & K ? -1 : 1)
      } : function(C, J) {
        if (C === J) return ua = !0, 0;
        var K = 0;
        var M = C.parentNode;
        var X = J.parentNode,
            V = [C],
            ea = [J];
        if (!M || !X) return C === x ? -1 : J === x ? 1 : M ? -1 : X ? 1 : ra ? ib.call(ra, C) - ib.call(ra, J) : 0;
        if (M === X) return q(C, J);
        for (M = C; M = M.parentNode;) V.unshift(M);
        for (M = J; M = M.parentNode;) ea.unshift(M);
        for (; V[K] === ea[K];) K++;
        return K ? q(V[K], ea[K]) : V[K] === Ea ? -1 : ea[K] === Ea ? 1 : 0
      }, x) : sa
    };
    c.matches = function(r, w) {
      return c(r, null, null, w)
    };
    c.matchesSelector = function(r, w) {
      if ((r.ownerDocument || r) !== sa && hb(r), w = w.replace(fd, "='$1']"), !(!xa.matchesSelector || !Ia || Ha && Ha.test(w) || za && za.test(w))) try {
        var x = va.call(r, w);
        if (x || xa.disconnectedMatch || r.document && 11 !== r.document.nodeType) return x
      } catch (C) {}
      return 0 < c(w, sa, null, [r]).length
    };
    c.contains = function(r, w) {
      return (r.ownerDocument || r) !== sa && hb(r), Oa(r, w)
    };
    c.attr = function(r, w) {
      (r.ownerDocument || r) !== sa && hb(r);
      var x = la.attrHandle[w.toLowerCase()];
      x = x && Ua.call(la.attrHandle, w.toLowerCase()) ? x(r, w, !Ia) : void 0;
      return void 0 !== x ? x : xa.attributes || !Ia ? r.getAttribute(w) : (x = r.getAttributeNode(w)) && x.specified ? x.value : null
    };
    c.error = function(r) {
      throw Error("Syntax error, unrecognized expression: " + r);
    };
    c.uniqueSort = function(r) {
      var w, x = [],
          C = 0,
          J = 0;
      if (ua = !xa.detectDuplicates, ra = !xa.sortStable && r.slice(0), r.sort(Ta), ua) {
        for (; w = r[J++];) w === r[J] && (C = x.push(J));
        for (; C--;) r.splice(x[C], 1)
      }
      return ra = null, r
    };
    var Xb = c.getText = function(r) {
      var w, x = "",
          C = 0;
      if (w = r.nodeType) if (1 === w || 9 === w || 11 === w) {
        if ("string" == typeof r.textContent) return r.textContent;
        for (r = r.firstChild; r; r = r.nextSibling) x += Xb(r)
      } else {
        if (3 === w || 4 === w) return r.nodeValue
      } else
      for (; w = r[C++];) x += Xb(w);
      return x
    };
    var la = c.selectors = {
      cacheLength: 50,
      createPseudo: g,
      match: Hb,
      attrHandle: {},
      find: {},
      relative: {
        ">": {
          dir: "parentNode",
          first: !0
        },
        " ": {
          dir: "parentNode"
        },
        "+": {
          dir: "previousSibling",
          first: !0
        },
        "~": {
          dir: "previousSibling"
        }
      },
      preFilter: {
        ATTR: function(r) {
          return r[1] = r[1].replace(bb, cb), r[3] = (r[3] || r[4] || r[5] || "").replace(bb, cb), "~=" === r[2] && (r[3] = " " + r[3] + " "), r.slice(0, 4)
        },
        CHILD: function(r) {
          return r[1] = r[1].toLowerCase(), "nth" === r[1].slice(0, 3) ? (r[3] || c.error(r[0]), r[4] = +(r[4] ? r[5] + (r[6] || 1) : 2 * ("even" === r[3] || "odd" === r[3])), r[5] = +(r[7] + r[8] || "odd" === r[3])) : r[3] && c.error(r[0]), r
        },
        PSEUDO: function(r) {
          var w, x = !r[6] && r[2];
          return Hb.CHILD.test(r[0]) ? null : (r[3] ? r[2] = r[4] || r[5] || "" : x && gd.test(x) && (w = Eb(x, !0)) && (w = x.indexOf(")", x.length - w) - x.length) && (r[0] = r[0].slice(0, w), r[2] = x.slice(0, w)), r.slice(0, 3))
        }
      },
      filter: {
        TAG: function(r) {
          var w = r.replace(bb, cb).toLowerCase();
          return "*" === r ?
          function() {
            return !0
          } : function(x) {
            return x.nodeName && x.nodeName.toLowerCase() === w
          }
        },
        CLASS: function(r) {
          var w = rb[r + " "];
          return w || (w = new RegExp("(^|[\\x20\\t\\r\\n\\f])" + r + "([\\x20\\t\\r\\n\\f]|$)"), rb(r, function(x) {
            return w.test("string" == typeof x.className && x.className || "undefined" !== typeof x.getAttribute && x.getAttribute("class") || "")
          }))
        },
        ATTR: function(r, w, x) {
          return function(C) {
            C = c.attr(C, r);
            return null == C ? "!=" === w : w ? (C += "", "=" === w ? C === x : "!=" === w ? C !== x : "^=" === w ? x && 0 === C.indexOf(x) : "*=" === w ? x && -1 < C.indexOf(x) : "$=" === w ? x && C.slice(-x.length) === x : "~=" === w ? -1 < (" " + C + " ").indexOf(x) : "|=" === w ? C === x || C.slice(0, x.length + 1) === x + "-" : !1) : !0
          }
        },
        CHILD: function(r, w, x, C, J) {
          var K = "nth" !== r.slice(0, 3),
              M = "last" !== r.slice(-4),
              X = "of-type" === w;
          return 1 === C && 0 === J ?
          function(V) {
            return !!V.parentNode
          } : function(V, ea, fa) {
            var ja;
            ea = K !== M ? "nextSibling" : "previousSibling";
            var Ca = V.parentNode,
                Sa = X && V.nodeName.toLowerCase();
            fa = !fa && !X;
            if (Ca) {
              if (K) {
                for (; ea;) {
                  for (ja = V; ja = ja[ea];) if (X ? ja.nodeName.toLowerCase() === Sa : 1 === ja.nodeType) return !1;
                  var qa = ea = "only" === r && !qa && "nextSibling"
                }
                return !0
              }
              if (qa = [M ? Ca.firstChild : Ca.lastChild], M && fa) {
                fa = Ca[ka] || (Ca[ka] = {});
                var ma = fa[r] || [];
                var Fa = ma[0] === Aa && ma[1];
                var Ga = ma[0] === Aa && ma[2];
                for (ja = Fa && Ca.childNodes[Fa]; ja = ++Fa && ja && ja[ea] || (Ga = Fa = 0) || qa.pop();) if (1 === ja.nodeType && ++Ga && ja === V) {
                  fa[r] = [Aa, Fa, Ga];
                  break
                }
              } else if (fa && (ma = (V[ka] || (V[ka] = {}))[r]) && ma[0] === Aa) Ga = ma[1];
              else
              for (;
              (ja = ++Fa && ja && ja[ea] || (Ga = Fa = 0) || qa.pop()) && ((X ? ja.nodeName.toLowerCase() !== Sa : 1 !== ja.nodeType) || !++Ga || (fa && ((ja[ka] || (ja[ka] = {}))[r] = [Aa, Ga]), ja !== V)););
              return Ga -= J, Ga === C || 0 === Ga % C && 0 <= Ga / C
            }
          }
        },
        PSEUDO: function(r, w) {
          var x, C = la.pseudos[r] || la.setFilters[r.toLowerCase()] || c.error("unsupported pseudo: " + r);
          return C[ka] ? C(w) : 1 < C.length ? (x = [r, r, "", w], la.setFilters.hasOwnProperty(r.toLowerCase()) ? g(function(J, K) {
            for (var M, X = C(J, w), V = X.length; V--;) M = ib.call(J, X[V]), J[M] = !(K[M] = X[V])
          }) : function(J) {
            return C(J, 0, x)
          }) : C
        }
      },
      pseudos: {
        not: g(function(r) {
          var w = [],
              x = [],
              C = ha(r.replace(Fb, "$1"));
          return C[ka] ? g(function(J, K, M, X) {
            var V;
            M = C(J, null, X, []);
            for (X = J.length; X--;)(V = M[X]) && (J[X] = !(K[X] = V))
          }) : function(J, K, M) {
            return w[0] = J, C(w, null, M, x), !x.pop()
          }
        }),
        has: g(function(r) {
          return function(w) {
            return 0 < c(r, w).length
          }
        }),
        contains: g(function(r) {
          return function(w) {
            return -1 < (w.textContent || w.innerText || Xb(w)).indexOf(r)
          }
        }),
        lang: g(function(r) {
          return hd.test(r || "") || c.error("unsupported lang: " + r), r = r.replace(bb, cb).toLowerCase(), function(w) {
            var x;
            do
            if (x = Ia ? w.lang : w.getAttribute("xml:lang") || w.getAttribute("lang")) return x = x.toLowerCase(), x === r || 0 === x.indexOf(r + "-");
            while ((w = w.parentNode) && 1 === w.nodeType);
            return !1
          }
        }),
        target: function(r) {
          var w = a.location && a.location.hash;
          return w && w.slice(1) === r.id
        },
        root: function(r) {
          return r === Ma
        },
        focus: function(r) {
          return r === sa.activeElement && (!sa.hasFocus || sa.hasFocus()) && !! (r.type || r.href || ~r.tabIndex)
        },
        enabled: function(r) {
          return !1 === r.disabled
        },
        disabled: function(r) {
          return !0 === r.disabled
        },
        checked: function(r) {
          var w = r.nodeName.toLowerCase();
          return "input" === w && !! r.checked || "option" === w && !! r.selected
        },
        selected: function(r) {
          return r.parentNode && r.parentNode.selectedIndex, !0 === r.selected
        },
        empty: function(r) {
          for (r = r.firstChild; r; r = r.nextSibling) if (6 > r.nodeType) return !1;
          return !0
        },
        parent: function(r) {
          return !la.pseudos.empty(r)
        },
        header: function(r) {
          return kd.test(r.nodeName)
        },
        input: function(r) {
          return jd.test(r.nodeName)
        },
        button: function(r) {
          var w = r.nodeName.toLowerCase();
          return "input" === w && "button" === r.type || "button" === w
        },
        text: function(r) {
          var w;
          return "input" === r.nodeName.toLowerCase() && "text" === r.type && (null == (w = r.getAttribute("type")) || "text" === w.toLowerCase())
        },
        first: G(function() {
          return [0]
        }),
        last: G(function(r, w) {
          return [w - 1]
        }),
        eq: G(function(r, w, x) {
          return [0 > x ? x + w : x]
        }),
        even: G(function(r, w) {
          for (var x = 0; w > x; x += 2) r.push(x);
          return r
        }),
        odd: G(function(r, w) {
          for (var x = 1; w > x; x += 2) r.push(x);
          return r
        }),
        lt: G(function(r, w, x) {
          for (w = 0 > x ? x + w : x; 0 <= --w;) r.push(w);
          return r
        }),
        gt: G(function(r, w, x) {
          for (x =
          0 > x ? x + w : x; ++x < w;) r.push(x);
          return r
        })
      }
    };
    la.pseudos.nth = la.pseudos.eq;
    for (Xa in {
      radio: !0,
      checkbox: !0,
      file: !0,
      password: !0,
      image: !0
    }) la.pseudos[Xa] = v(Xa);
    for (Xa in {
      submit: !0,
      reset: !0
    }) la.pseudos[Xa] = z(Xa);
    L.prototype = la.filters = la.pseudos;
    la.setFilters = new L;
    var Eb = c.tokenize = function(r, w) {
      var x, C, J, K, M;
      if (K = Qa[r + " "]) return w ? 0 : K.slice(0);
      K = r;
      var X = [];
      for (M = la.preFilter; K;) {
        V && !(x = dd.exec(K)) || (x && (K = K.slice(x[0].length) || K), X.push(C = []));
        var V = !1;
        (x = ed.exec(K)) && (V = x.shift(), C.push({
          value: V,
          type: x[0].replace(Fb, " ")
        }), K = K.slice(V.length));
        for (J in la.filter)!(x = Hb[J].exec(K)) || M[J] && !(x = M[J](x)) || (V = x.shift(), C.push({
          value: V,
          type: J,
          matches: x
        }), K = K.slice(V.length));
        if (!V) break
      }
      return w ? K.length : K ? c.error(r) : Qa(r, X).slice(0)
    };
    return ha = c.compile = function(r, w) {
      var x, C = [],
          J = [],
          K = Ja[r + " "];
      if (!K) {
        w || (w = Eb(r));
        for (x = w.length; x--;) K = Wa(w[x]), K[ka] ? C.push(K) : J.push(K);
        K = Ja(r, Na(J, C));
        K.selector = r
      }
      return K
    }, Ka = c.select = function(r, w, x, C) {
      var J, K, M, X, V, ea = "function" == typeof r && r,
          fa = !C && Eb(r = ea.selector || r);
      if (x = x || [], 1 === fa.length) {
        if (K = fa[0] = fa[0].slice(0), 2 < K.length && "ID" === (M = K[0]).type && xa.getById && 9 === w.nodeType && Ia && la.relative[K[1].type]) {
          if (w = (la.find.ID(M.matches[0].replace(bb, cb), w) || [])[0], !w) return x;
          ea && (w = w.parentNode);
          r = r.slice(K.shift().value.length)
        }
        for (J = Hb.needsContext.test(r) ? 0 : K.length; J-- && (M = K[J], !la.relative[X = M.type]);) if ((V = la.find[X]) && (C = V(M.matches[0].replace(bb, cb), Ub.test(K[0].type) && A(w.parentNode) || w))) {
          if (K.splice(J, 1), r = C.length && U(K), !r) return ab.apply(x, C), x;
          break
        }
      }
      return (ea || ha(r, fa))(C, w, !Ia, x, Ub.test(r) && A(w.parentNode) || w), x
    }, xa.sortStable = ka.split("").sort(Ta).join("") === ka, xa.detectDuplicates = !! ua, hb(), xa.sortDetached = k(function(r) {
      return 1 & r.compareDocumentPosition(sa.createElement("div"))
    }), k(function(r) {
      return r.innerHTML = "<a href='#'></a>", "#" === r.firstChild.getAttribute("href")
    }) || l("type|href|height|width", function(r, w, x) {
      return x ? void 0 : r.getAttribute(w, "type" === w.toLowerCase() ? 1 : 2)
    }), xa.attributes && k(function(r) {
      return r.innerHTML = "<input/>", r.firstChild.setAttribute("value", ""), "" === r.firstChild.getAttribute("value")
    }) || l("value", function(r, w, x) {
      return x || "input" !== r.nodeName.toLowerCase() ? void 0 : r.defaultValue
    }), k(function(r) {
      return null == r.getAttribute("disabled")
    }) || l("checked|selected|async|autofocus|autoplay|controls|defer|disabled|hidden|ismap|loop|multiple|open|readonly|required|scoped", function(r, w, x) {
      var C;
      return x ? void 0 : !0 === r[w] ? w.toLowerCase() : (C = r.getAttributeNode(w)) && C.specified ? C.value : null
    }), c
  }(b);
  e.find = sb;
  e.expr = sb.selectors;
  e.expr[":"] = e.expr.pseudos;
  e.unique = sb.uniqueSort;
  e.text = sb.getText;
  e.isXMLDoc = sb.isXML;
  e.contains = sb.contains;
  var vc = e.expr.match.needsContext,
      wc = /^<(\w+)\s*\/?>(?:<\/\1>|)$/,
      Pc = /^.[^:#\[\.,]*$/;
  e.filter = function(a, c, d) {
    var g = c[0];
    return d && (a = ":not(" + a + ")"), 1 === c.length && 1 === g.nodeType ? e.find.matchesSelector(g, a) ? [g] : [] : e.find.matches(a, e.grep(c, function(k) {
      return 1 === k.nodeType
    }))
  };
  e.fn.extend({
    find: function(a) {
      var c, d = [],
          g = this,
          k = g.length;
      if ("string" != typeof a) return this.pushStack(e(a).filter(function() {
        for (c = 0; k > c; c++) if (e.contains(g[c], this)) return !0
      }));
      for (c = 0; k > c; c++) e.find(a, g[c], d);
      return d = this.pushStack(1 < k ? e.unique(d) : d), d.selector = this.selector ? this.selector + " " + a : a, d
    },
    filter: function(a) {
      return this.pushStack(p(this, a || [], !1))
    },
    not: function(a) {
      return this.pushStack(p(this, a || [], !0))
    },
    is: function(a) {
      return !!p(this, "string" == typeof a && vc.test(a) ? e(a) : a || [], !1).length
    }
  });
  var Y = b.document,
      md = /^(?:\s*(<[\w\W]+>)[^>]*|#([\w-]*))$/;
  (e.fn.init = function(a, c) {
    var d, g;
    if (!a) return this;
    if ("string" == typeof a) {
      if (d = "<" === a.charAt(0) && ">" === a.charAt(a.length - 1) && 3 <= a.length ? [null, a, null] : md.exec(a), !d || !d[1] && c) return !c || c.jquery ? (c || Ib).find(a) : this.constructor(c).find(a);
      if (d[1]) {
        if (c = c instanceof e ? c[0] : c, e.merge(this, e.parseHTML(d[1], c && c.nodeType ? c.ownerDocument || c : Y, !0)), wc.test(d[1]) && e.isPlainObject(c)) for (d in c) e.isFunction(this[d]) ? this[d](c[d]) : this.attr(d, c[d]);
        return this
      }
      if (g = Y.getElementById(d[2]), g && g.parentNode) {
        if (g.id !== d[2]) return Ib.find(a);
        this.length = 1;
        this[0] = g
      }
      return this.context = Y, this.selector = a, this
    }
    return a.nodeType ? (this.context = this[0] = a, this.length = 1, this) : e.isFunction(a) ? "undefined" != typeof Ib.ready ? Ib.ready(a) : a(e) : (void 0 !== a.selector && (this.selector = a.selector, this.context = a.context), e.makeArray(a, this))
  }).prototype = e.fn;
  var Ib = e(Y);
  var nd = /^(?:parents|prev(?:Until|All))/,
      od = {
      children: !0,
      contents: !0,
      next: !0,
      prev: !0
      };
  e.extend({
    dir: function(a, c, d) {
      var g = [];
      for (a = a[c]; a && 9 !== a.nodeType && (void 0 === d || 1 !== a.nodeType || !e(a).is(d));) 1 === a.nodeType && g.push(a), a = a[c];
      return g
    },
    sibling: function(a, c) {
      for (var d = []; a; a =
      a.nextSibling) 1 === a.nodeType && a !== c && d.push(a);
      return d
    }
  });
  e.fn.extend({
    has: function(a) {
      var c, d = e(a, this),
          g = d.length;
      return this.filter(function() {
        for (c = 0; g > c; c++) if (e.contains(this, d[c])) return !0
      })
    },
    closest: function(a, c) {
      for (var d, g = 0, k = this.length, l = [], q = vc.test(a) || "string" != typeof a ? e(a, c || this.context) : 0; k > g; g++) for (d = this[g]; d && d !== c; d = d.parentNode) if (11 > d.nodeType && (q ? -1 < q.index(d) : 1 === d.nodeType && e.find.matchesSelector(d, a))) {
        l.push(d);
        break
      }
      return this.pushStack(1 < l.length ? e.unique(l) : l)
    },
    index: function(a) {
      return a ? "string" == typeof a ? e.inArray(this[0], e(a)) : e.inArray(a.jquery ? a[0] : a, this) : this[0] && this[0].parentNode ? this.first().prevAll().length : -1
    },
    add: function(a, c) {
      return this.pushStack(e.unique(e.merge(this.get(), e(a, c))))
    },
    addBack: function(a) {
      return this.add(null == a ? this.prevObject : this.prevObject.filter(a))
    }
  });
  e.each({
    parent: function(a) {
      return (a = a.parentNode) && 11 !== a.nodeType ? a : null
    },
    parents: function(a) {
      return e.dir(a, "parentNode")
    },
    parentsUntil: function(a, c, d) {
      return e.dir(a, "parentNode", d)
    },
    next: function(a) {
      return n(a, "nextSibling")
    },
    prev: function(a) {
      return n(a, "previousSibling")
    },
    nextAll: function(a) {
      return e.dir(a, "nextSibling")
    },
    prevAll: function(a) {
      return e.dir(a, "previousSibling")
    },
    nextUntil: function(a, c, d) {
      return e.dir(a, "nextSibling", d)
    },
    prevUntil: function(a, c, d) {
      return e.dir(a, "previousSibling", d)
    },
    siblings: function(a) {
      return e.sibling((a.parentNode || {}).firstChild, a)
    },
    children: function(a) {
      return e.sibling(a.firstChild)
    },
    contents: function(a) {
      return e.nodeName(a, "iframe") ? a.contentDocument || a.contentWindow.document : e.merge([], a.childNodes)
    }
  }, function(a, c) {
    e.fn[a] = function(d, g) {
      var k = e.map(this, c, d);
      return "Until" !== a.slice(-5) && (g = d), g && "string" == typeof g && (k = e.filter(g, k)), 1 < this.length && (od[a] || (k = e.unique(k)), nd.test(a) && (k = k.reverse())), this.pushStack(k)
    }
  });
  var Va = /\S+/g,
      gc = {};
  e.Callbacks = function(a) {
    a = "string" == typeof a ? gc[a] || m(a) : e.extend({}, a);
    var c, d, g, k, l, q, v = [],
        z = !a.once && [],
        G = function(L) {
        d = a.memory && L;
        g = !0;
        l = q || 0;
        q = 0;
        k = v.length;
        for (c = !0; v && k > l; l++) if (!1 === v[l].apply(L[0], L[1]) && a.stopOnFalse) {
          d = !1;
          break
        }
        c = !1;
        v && (z ? z.length && G(z.shift()) : d ? v = [] : A.disable())
        },
        A = {
        add: function() {
          if (v) {
            var L = v.length;
            !
            function ca(ba) {
              e.each(ba, function(ya, Ba) {
                var Wa = e.type(Ba);
                "function" === Wa ? a.unique && A.has(Ba) || v.push(Ba) : Ba && Ba.length && "string" !== Wa && ca(Ba)
              })
            }(arguments);
            c ? k = v.length : d && (q = L, G(d))
          }
          return this
        },
        remove: function() {
          return v && e.each(arguments, function(L, U) {
            for (var ba; - 1 < (ba = e.inArray(U, v, ba));) v.splice(ba, 1), c && (k >= ba && k--, l >= ba && l--)
          }), this
        },
        has: function(L) {
          return L ? -1 < e.inArray(L, v) : !(!v || !v.length)
        },
        empty: function() {
          return v = [], k = 0, this
        },
        disable: function() {
          return v = z = d = void 0, this
        },
        disabled: function() {
          return !v
        },
        lock: function() {
          return z = void 0, d || A.disable(), this
        },
        locked: function() {
          return !z
        },
        fireWith: function(L, U) {
          return !v || g && !z || (U = U || [], U = [L, U.slice ? U.slice() : U], c ? z.push(U) : G(U)), this
        },
        fire: function() {
          return A.fireWith(this, arguments), this
        },
        fired: function() {
          return !!g
        }
        };
    return A
  };
  e.extend({
    Deferred: function(a) {
      var c = [
        ["resolve", "done", e.Callbacks("once memory"), "resolved"],
        ["reject", "fail", e.Callbacks("once memory"), "rejected"],
        ["notify", "progress", e.Callbacks("memory")]
      ],
          d = "pending",
          g = {
          state: function() {
            return d
          },
          always: function() {
            return k.done(arguments).fail(arguments), this
          },
          then: function() {
            var l = arguments;
            return e.Deferred(function(q) {
              e.each(c, function(v, z) {
                var G = e.isFunction(l[v]) && l[v];
                k[z[1]](function() {
                  var A = G && G.apply(this, arguments);
                  A && e.isFunction(A.promise) ? A.promise().done(q.resolve).fail(q.reject).progress(q.notify) : q[z[0] + "With"](this === g ? q.promise() : this, G ? [A] : arguments)
                })
              });
              l = null
            }).promise()
          },
          promise: function(l) {
            return null != l ? e.extend(l, g) : g
          }
          },
          k = {};
      return g.pipe = g.then, e.each(c, function(l, q) {
        var v = q[2],
            z = q[3];
        g[q[1]] = v.add;
        z && v.add(function() {
          d = z
        }, c[1 ^ l][2].disable, c[2][2].lock);
        k[q[0]] = function() {
          return k[q[0] + "With"](this === k ? g : this, arguments), this
        };
        k[q[0] + "With"] = v.fireWith
      }), g.promise(k), a && a.call(k, k), k
    },
    when: function(a) {
      var c = 0,
          d = $a.call(arguments),
          g = d.length,
          k = 1 !== g || a && e.isFunction(a.promise) ? g : 0,
          l = 1 === k ? a : e.Deferred(),
          q = function(A, L, U) {
          return function(ba) {
            L[A] = this;
            U[A] = 1 < arguments.length ? $a.call(arguments) : ba;
            U === z ? l.notifyWith(L, U) : --k || l.resolveWith(L, U)
          }
          },
          v;
      if (1 < g) {
        var z = Array(g);
        var G = Array(g);
        for (v = Array(g); g > c; c++) d[c] && e.isFunction(d[c].promise) ? d[c].promise().done(q(c, v, d)).fail(l.reject).progress(q(c, G, z)) : --k
      }
      return k || l.resolveWith(v, d), l.promise()
    }
  });
  var Jb;
  e.fn.ready = function(a) {
    return e.ready.promise().done(a), this
  };
  e.extend({
    isReady: !1,
    readyWait: 1,
    holdReady: function(a) {
      a ? e.readyWait++ : e.ready(!0)
    },
    ready: function(a) {
      if (!0 === a ? !--e.readyWait : !e.isReady) {
        if (!Y.body) return setTimeout(e.ready);
        e.isReady = !0;
        !0 !== a && 0 < --e.readyWait || (Jb.resolveWith(Y, [e]), e.fn.triggerHandler && (e(Y).triggerHandler("ready"), e(Y).off("ready")))
      }
    }
  });
  e.ready.promise = function(a) {
    if (!Jb) if (Jb = e.Deferred(), "complete" === Y.readyState) setTimeout(e.ready);
    else if (Y.addEventListener) Y.addEventListener("DOMContentLoaded", u, !1), b.addEventListener("load", u, !1);
    else {
      Y.attachEvent("onreadystatechange", u);
      b.attachEvent("onload", u);
      var c = !1;
      try {
        c = null == b.frameElement && Y.documentElement
      } catch (d) {}
      c && c.doScroll && !
      function g() {
        if (!e.isReady) {
          try {
            c.doScroll("left")
          } catch (k) {
            return setTimeout(g, 50)
          }
          t();
          e.ready()
        }
      }()
    }
    return Jb.promise(a)
  };
  for (var pd in e(T)) break;
  T.ownLast = "0" !== pd;
  T.inlineBlockNeedsLayout = !1;
  e(function() {
    var a, c, d, g;
    (d = Y.getElementsByTagName("body")[0]) && d.style && (c = Y.createElement("div"), g = Y.createElement("div"), g.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", d.appendChild(g).appendChild(c), "undefined" !== typeof c.style.zoom && (c.style.cssText = "display:inline;margin:0;border:0;padding:1px;width:1px;zoom:1", T.inlineBlockNeedsLayout = a = 3 === c.offsetWidth, a && (d.style.zoom = 1)), d.removeChild(g))
  });
  (function() {
    var a = Y.createElement("div");
    if (null == T.deleteExpando) {
      T.deleteExpando = !0;
      try {
        delete a.test
      } catch (c) {
        T.deleteExpando = !1
      }
    }
  })();
  e.acceptData = function(a) {
    var c = e.noData[(a.nodeName + " ").toLowerCase()],
        d = +a.nodeType || 1;
    return 1 !== d && 9 !== d ? !1 : !c || !0 !== c && a.getAttribute("classid") === c
  };
  var Rc = /^(?:\{[\w\W]*\}|\[[\w\W]*\])$/,
      Qc = /([A-Z])/g;
  e.extend({
    cache: {},
    noData: {
      "applet ": !0,
      "embed ": !0,
      "object ": "clsid:D27CDB6E-AE6D-11cf-96B8-444553540000"
    },
    hasData: function(a) {
      return a = a.nodeType ? e.cache[a[e.expando]] : a[e.expando], !! a && !y(a)
    },
    data: function(a, c, d) {
      return H(a, c, d)
    },
    removeData: function(a, c) {
      return D(a, c)
    },
    _data: function(a, c, d) {
      return H(a, c, d, !0)
    },
    _removeData: function(a, c) {
      return D(a, c, !0)
    }
  });
  e.fn.extend({
    data: function(a, c) {
      var d, g, k, l = this[0],
          q = l && l.attributes;
      if (void 0 === a) {
        if (this.length && (k = e.data(l), 1 === l.nodeType && !e._data(l, "parsedAttrs"))) {
          for (d = q.length; d--;) q[d] && (g = q[d].name, 0 === g.indexOf("data-") && (g = e.camelCase(g.slice(5)), B(l, g, k[g])));
          e._data(l, "parsedAttrs", !0)
        }
        return k
      }
      return "object" == typeof a ? this.each(function() {
        e.data(this, a)
      }) : 1 < arguments.length ? this.each(function() {
        e.data(this, a, c)
      }) : l ? B(l, a, e.data(l, a)) : void 0
    },
    removeData: function(a) {
      return this.each(function() {
        e.removeData(this, a)
      })
    }
  });
  e.extend({
    queue: function(a, c, d) {
      var g;
      return a ? (c = (c || "fx") + "queue", g = e._data(a, c), d && (!g || e.isArray(d) ? g = e._data(a, c, e.makeArray(d)) : g.push(d)), g || []) : void 0
    },
    dequeue: function(a, c) {
      c = c || "fx";
      var d = e.queue(a, c),
          g = d.length,
          k = d.shift(),
          l = e._queueHooks(a, c),
          q = function() {
          e.dequeue(a, c)
          };
      "inprogress" === k && (k = d.shift(), g--);
      k && ("fx" === c && d.unshift("inprogress"), delete l.stop, k.call(a, q, l));
      !g && l && l.empty.fire()
    },
    _queueHooks: function(a, c) {
      var d = c + "queueHooks";
      return e._data(a, d) || e._data(a, d, {
        empty: e.Callbacks("once memory").add(function() {
          e._removeData(a, c + "queue");
          e._removeData(a, d)
        })
      })
    }
  });
  e.fn.extend({
    queue: function(a, c) {
      var d = 2;
      return "string" != typeof a && (c = a, a = "fx", d--), arguments.length < d ? e.queue(this[0], a) : void 0 === c ? this : this.each(function() {
        var g = e.queue(this, a, c);
        e._queueHooks(this, a);
        "fx" === a && "inprogress" !== g[0] && e.dequeue(this, a)
      })
    },
    dequeue: function(a) {
      return this.each(function() {
        e.dequeue(this, a)
      })
    },
    clearQueue: function(a) {
      return this.queue(a || "fx", [])
    },
    promise: function(a, c) {
      var d, g = 1,
          k = e.Deferred(),
          l = this,
          q = this.length,
          v = function() {
          --g || k.resolveWith(l, [l])
          };
      "string" != typeof a && (c = a, a = void 0);
      for (a = a || "fx"; q--;)(d = e._data(l[q], a + "queueHooks")) && d.empty && (g++, d.empty.add(v));
      return v(), k.promise(c)
    }
  });
  var Kb = /[+-]?(?:\d*\.|)\d+(?:[eE][+-]?\d+|)/.source,
      eb = ["Top", "Right", "Bottom", "Left"],
      wb = function(a, c) {
      return a = c || a, "none" === e.css(a, "display") || !e.contains(a.ownerDocument, a)
      },
      jb = e.access = function(a, c, d, g, k, l, q) {
      var v = 0,
          z = a.length,
          G = null == d;
      if ("object" === e.type(d)) for (v in k = !0, d) e.access(a, c, v, d[v], !0, l, q);
      else if (void 0 !== g && (k = !0, e.isFunction(g) || (q = !0), G && (q ? (c.call(a, g), c = null) : (G = c, c = function(A, L, U) {
        return G.call(e(A), U)
      })), c)) for (; z > v; v++) c(a[v], d, q ? g : g.call(a[v], v, c(a[v], d)));
      return k ? a : G ? c.call(a) : z ? c(a[0], d) : l
      },
      Pb = /^(?:checkbox|radio)$/i;
  !
  function() {
    var a = Y.createElement("input"),
        c = Y.createElement("div"),
        d = Y.createDocumentFragment();
    if (c.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", T.leadingWhitespace = 3 === c.firstChild.nodeType, T.tbody = !c.getElementsByTagName("tbody").length, T.htmlSerialize = !! c.getElementsByTagName("link").length, T.html5Clone = "<:nav></:nav>" !== Y.createElement("nav").cloneNode(!0).outerHTML, a.type = "checkbox", a.checked = !0, d.appendChild(a), T.appendChecked = a.checked, c.innerHTML = "<textarea>x</textarea>", T.noCloneChecked = !! c.cloneNode(!0).lastChild.defaultValue, d.appendChild(c), c.innerHTML = "<input type='radio' checked='checked' name='t'/>", T.checkClone = c.cloneNode(!0).cloneNode(!0).lastChild.checked, T.noCloneEvent = !0, c.attachEvent && (c.attachEvent("onclick", function() {
      T.noCloneEvent = !1
    }), c.cloneNode(!0).click()), null == T.deleteExpando) {
      T.deleteExpando = !0;
      try {
        delete c.test
      } catch (g) {
        T.deleteExpando = !1
      }
    }
  }();
  (function() {
    var a, c = Y.createElement("div");
    for (a in {
      submit: !0,
      change: !0,
      focusin: !0
    }) {
      var d = "on" + a;
      (T[a + "Bubbles"] = d in b) || (c.setAttribute(d, "t"), T[a + "Bubbles"] = !1 === c.attributes[d].expando)
    }
  })();
  var Yb = /^(?:input|select|textarea)$/i,
      qd = /^key/,
      rd = /^(?:mouse|pointer|contextmenu)|click/,
      xc = /^(?:focusinfocus|focusoutblur)$/,
      yc = /^([^.]*)(?:\.(.+)|)$/;
  e.event = {
    global: {},
    add: function(a, c, d, g, k) {
      var l, q, v, z, G, A, L, U;
      if (q = e._data(a)) {
        d.handler && (v = d, d = v.handler, k = v.selector);
        d.guid || (d.guid = e.guid++);
        (l = q.events) || (l = q.events = {});
        (G = q.handle) || (G = q.handle = function(ya) {
          return "undefined" === typeof e || ya && e.event.triggered === ya.type ? void 0 : e.event.dispatch.apply(G.elem, arguments)
        }, G.elem = a);
        c = (c || "").match(Va) || [""];
        for (q = c.length; q--;) {
          var ba = yc.exec(c[q]) || [];
          var ca = U = ba[1];
          ba = (ba[2] || "").split(".").sort();
          ca && (z = e.event.special[ca] || {}, ca = (k ? z.delegateType : z.bindType) || ca, z = e.event.special[ca] || {}, A = e.extend({
            type: ca,
            origType: U,
            data: g,
            handler: d,
            guid: d.guid,
            selector: k,
            needsContext: k && e.expr.match.needsContext.test(k),
            namespace: ba.join(".")
          }, v), (L = l[ca]) || (L = l[ca] = [], L.delegateCount = 0, z.setup && !1 !== z.setup.call(a, g, ba, G) || (a.addEventListener ? a.addEventListener(ca, G, !1) : a.attachEvent && a.attachEvent("on" + ca, G))), z.add && (z.add.call(a, A), A.handler.guid || (A.handler.guid = d.guid)), k ? L.splice(L.delegateCount++, 0, A) : L.push(A), e.event.global[ca] = !0)
        }
        a = null
      }
    },
    remove: function(a, c, d, g, k) {
      var l, q, v, z, G, A, L, U, ba = e.hasData(a) && e._data(a);
      if (ba && (G = ba.events)) {
        c = (c || "").match(Va) || [""];
        for (z = c.length; z--;) if (q = yc.exec(c[z]) || [], A = U = q[1], L = (q[2] || "").split(".").sort(), A) {
          var ca = e.event.special[A] || {};
          A = (g ? ca.delegateType : ca.bindType) || A;
          var ya = G[A] || [];
          q = q[2] && new RegExp("(^|\\.)" + L.join("\\.(?:.*\\.|)") + "(\\.|$)");
          for (v = l = ya.length; l--;) {
            var Ba = ya[l];
            !k && U !== Ba.origType || d && d.guid !== Ba.guid || q && !q.test(Ba.namespace) || g && g !== Ba.selector && ("**" !== g || !Ba.selector) || (ya.splice(l, 1), Ba.selector && ya.delegateCount--, ca.remove && ca.remove.call(a, Ba))
          }
          v && !ya.length && (ca.teardown && !1 !== ca.teardown.call(a, L, ba.handle) || e.removeEvent(a, A, ba.handle), delete G[A])
        } else
        for (A in G) e.event.remove(a, A + c[z], d, g, !0);
        e.isEmptyObject(G) && (delete ba.handle, e._removeData(a, "events"))
      }
    },
    trigger: function(a, c, d, g) {
      var k, l, q, v, z = [d || Y],
          G = qb.call(a, "type") ? a.type : a;
      var A = qb.call(a, "namespace") ? a.namespace.split(".") : [];
      if (q = k = d = d || Y, 3 !== d.nodeType && 8 !== d.nodeType && !xc.test(G + e.event.triggered) && (0 <= G.indexOf(".") && (A = G.split("."), G = A.shift(), A.sort()), l = 0 > G.indexOf(":") && "on" + G, a = a[e.expando] ? a : new e.Event(G, "object" == typeof a && a), a.isTrigger = g ? 2 : 3, a.namespace = A.join("."), a.namespace_re = a.namespace ? new RegExp("(^|\\.)" + A.join("\\.(?:.*\\.|)") + "(\\.|$)") : null, a.result = void 0, a.target || (a.target = d), c = null == c ? [a] : e.makeArray(c, [a]), v = e.event.special[G] || {}, g || !v.trigger || !1 !== v.trigger.apply(d, c))) {
        if (!g && !v.noBubble && !e.isWindow(d)) {
          var L = v.delegateType || G;
          for (xc.test(L + G) || (q = q.parentNode); q; q = q.parentNode) z.push(q), k = q;
          k === (d.ownerDocument || Y) && z.push(k.defaultView || k.parentWindow || b)
        }
        for (A = 0;
        (q = z[A++]) && !a.isPropagationStopped();) a.type = 1 < A ? L : v.bindType || G, (k = (e._data(q, "events") || {})[a.type] && e._data(q, "handle")) && k.apply(q, c), (k = l && q[l]) && k.apply && e.acceptData(q) && (a.result = k.apply(q, c), !1 === a.result && a.preventDefault());
        if (a.type = G, !(g || a.isDefaultPrevented() || v._default && !1 !== v._default.apply(z.pop(), c)) && e.acceptData(d) && l && d[G] && !e.isWindow(d)) {
          (k = d[l]) && (d[l] = null);
          e.event.triggered = G;
          try {
            d[G]()
          } catch (U) {}
          e.event.triggered = void 0;
          k && (d[l] = k)
        }
        return a.result
      }
    },
    dispatch: function(a) {
      a = e.event.fix(a);
      var c, d, g, k, l = $a.call(arguments);
      var q = (e._data(this, "events") || {})[a.type] || [];
      var v = e.event.special[a.type] || {};
      if (l[0] = a, a.delegateTarget = this, !v.preDispatch || !1 !== v.preDispatch.call(this, a)) {
        var z = e.event.handlers.call(this, a, q);
        for (q = 0;
        (g = z[q++]) && !a.isPropagationStopped();) for (a.currentTarget = g.elem, k = 0;
        (d = g.handlers[k++]) && !a.isImmediatePropagationStopped();) a.namespace_re && !a.namespace_re.test(d.namespace) || (a.handleObj = d, a.data = d.data, c = ((e.event.special[d.origType] || {}).handle || d.handler).apply(g.elem, l), void 0 === c || !1 !== (a.result = c) || (a.preventDefault(), a.stopPropagation()));
        return v.postDispatch && v.postDispatch.call(this, a), a.result
      }
    },
    handlers: function(a, c) {
      var d, g = [],
          k = c.delegateCount,
          l = a.target;
      if (k && l.nodeType && (!a.button || "click" !== a.type)) for (; l != this; l = l.parentNode || this) if (1 === l.nodeType && (!0 !== l.disabled || "click" !== a.type)) {
        var q = [];
        for (d = 0; k > d; d++) {
          var v = c[d];
          var z = v.selector + " ";
          void 0 === q[z] && (q[z] =
          v.needsContext ? 0 <= e(z, this).index(l) : e.find(z, this, null, [l]).length);
          q[z] && q.push(v)
        }
        q.length && g.push({
          elem: l,
          handlers: q
        })
      }
      return k < c.length && g.push({
        elem: this,
        handlers: c.slice(k)
      }), g
    },
    fix: function(a) {
      if (a[e.expando]) return a;
      var c = a.type;
      var d = a,
          g = this.fixHooks[c];
      g || (this.fixHooks[c] = g = rd.test(c) ? this.mouseHooks : qd.test(c) ? this.keyHooks : {});
      var k = g.props ? this.props.concat(g.props) : this.props;
      a = new e.Event(d);
      for (c = k.length; c--;) {
        var l = k[c];
        a[l] = d[l]
      }
      return a.target || (a.target = d.srcElement || Y), 3 === a.target.nodeType && (a.target = a.target.parentNode), a.metaKey = !! a.metaKey, g.filter ? g.filter(a, d) : a
    },
    props: "altKey bubbles cancelable ctrlKey currentTarget eventPhase metaKey relatedTarget shiftKey target timeStamp view which".split(" "),
    fixHooks: {},
    keyHooks: {
      props: ["char", "charCode", "key", "keyCode"],
      filter: function(a, c) {
        return null == a.which && (a.which = null != c.charCode ? c.charCode : c.keyCode), a
      }
    },
    mouseHooks: {
      props: "button buttons clientX clientY fromElement offsetX offsetY pageX pageY screenX screenY toElement".split(" "),
      filter: function(a, c) {
        var d, g, k, l = c.button,
            q = c.fromElement;
        return null == a.pageX && null != c.clientX && (g = a.target.ownerDocument || Y, k = g.documentElement, d = g.body, a.pageX = c.clientX + (k && k.scrollLeft || d && d.scrollLeft || 0) - (k && k.clientLeft || d && d.clientLeft || 0), a.pageY = c.clientY + (k && k.scrollTop || d && d.scrollTop || 0) - (k && k.clientTop || d && d.clientTop || 0)), !a.relatedTarget && q && (a.relatedTarget = q === a.target ? c.toElement : q), a.which || void 0 === l || (a.which = 1 & l ? 1 : 2 & l ? 3 : 4 & l ? 2 : 0), a
      }
    },
    special: {
      load: {
        noBubble: !0
      },
      focus: {
        trigger: function() {
          if (this !== E() && this.focus) try {
            return this.focus(), !1
          } catch (a) {}
        },
        delegateType: "focusin"
      },
      blur: {
        trigger: function() {
          return this === E() && this.blur ? (this.blur(), !1) : void 0
        },
        delegateType: "focusout"
      },
      click: {
        trigger: function() {
          return e.nodeName(this, "input") && "checkbox" === this.type && this.click ? (this.click(), !1) : void 0
        },
        _default: function(a) {
          return e.nodeName(a.target, "a")
        }
      },
      beforeunload: {
        postDispatch: function(a) {
          void 0 !== a.result && a.originalEvent && (a.originalEvent.returnValue = a.result)
        }
      }
    },
    simulate: function(a, c, d, g) {
      a =
      e.extend(new e.Event, d, {
        type: a,
        isSimulated: !0,
        originalEvent: {}
      });
      g ? e.event.trigger(a, null, c) : e.event.dispatch.call(c, a);
      a.isDefaultPrevented() && d.preventDefault()
    }
  };
  e.removeEvent = Y.removeEventListener ?
  function(a, c, d) {
    a.removeEventListener && a.removeEventListener(c, d, !1)
  } : function(a, c, d) {
    c = "on" + c;
    a.detachEvent && ("undefined" === typeof a[c] && (a[c] = null), a.detachEvent(c, d))
  };
  e.Event = function(a, c) {
    return this instanceof e.Event ? (a && a.type ? (this.originalEvent = a, this.type = a.type, this.isDefaultPrevented = a.defaultPrevented || void 0 === a.defaultPrevented && !1 === a.returnValue ? F : R) : this.type = a, c && e.extend(this, c), this.timeStamp = a && a.timeStamp || e.now(), void(this[e.expando] = !0)) : new e.Event(a, c)
  };
  e.Event.prototype = {
    isDefaultPrevented: R,
    isPropagationStopped: R,
    isImmediatePropagationStopped: R,
    preventDefault: function() {
      var a = this.originalEvent;
      this.isDefaultPrevented = F;
      a && (a.preventDefault ? a.preventDefault() : a.returnValue = !1)
    },
    stopPropagation: function() {
      var a = this.originalEvent;
      this.isPropagationStopped = F;
      a && (a.stopPropagation && a.stopPropagation(), a.cancelBubble = !0)
    },
    stopImmediatePropagation: function() {
      var a = this.originalEvent;
      this.isImmediatePropagationStopped = F;
      a && a.stopImmediatePropagation && a.stopImmediatePropagation();
      this.stopPropagation()
    }
  };
  e.each({
    mouseenter: "mouseover",
    mouseleave: "mouseout",
    pointerenter: "pointerover",
    pointerleave: "pointerout"
  }, function(a, c) {
    e.event.special[a] = {
      delegateType: c,
      bindType: c,
      handle: function(d) {
        var g, k = d.relatedTarget,
            l = d.handleObj;
        return (!k || k !== this && !e.contains(this, k)) && (d.type = l.origType, g = l.handler.apply(this, arguments), d.type = c), g
      }
    }
  });
  T.submitBubbles || (e.event.special.submit = {
    setup: function() {
      return e.nodeName(this, "form") ? !1 : void e.event.add(this, "click._submit keypress._submit", function(a) {
        a = a.target;
        (a = e.nodeName(a, "input") || e.nodeName(a, "button") ? a.form : void 0) && !e._data(a, "submitBubbles") && (e.event.add(a, "submit._submit", function(c) {
          c._submit_bubble = !0
        }), e._data(a, "submitBubbles", !0))
      })
    },
    postDispatch: function(a) {
      a._submit_bubble && (delete a._submit_bubble, this.parentNode && !a.isTrigger && e.event.simulate("submit", this.parentNode, a, !0))
    },
    teardown: function() {
      return e.nodeName(this, "form") ? !1 : void e.event.remove(this, "._submit")
    }
  });
  T.changeBubbles || (e.event.special.change = {
    setup: function() {
      return Yb.test(this.nodeName) ? (("checkbox" === this.type || "radio" === this.type) && (e.event.add(this, "propertychange._change", function(a) {
        "checked" === a.originalEvent.propertyName && (this._just_changed = !0)
      }), e.event.add(this, "click._change", function(a) {
        this._just_changed && !a.isTrigger && (this._just_changed = !1);
        e.event.simulate("change", this, a, !0)
      })), !1) : void e.event.add(this, "beforeactivate._change", function(a) {
        a = a.target;
        Yb.test(a.nodeName) && !e._data(a, "changeBubbles") && (e.event.add(a, "change._change", function(c) {
          !this.parentNode || c.isSimulated || c.isTrigger || e.event.simulate("change", this.parentNode, c, !0)
        }), e._data(a, "changeBubbles", !0))
      })
    },
    handle: function(a) {
      var c = a.target;
      return this !== c || a.isSimulated || a.isTrigger || "radio" !== c.type && "checkbox" !== c.type ? a.handleObj.handler.apply(this, arguments) : void 0
    },
    teardown: function() {
      return e.event.remove(this, "._change"), !Yb.test(this.nodeName)
    }
  });
  T.focusinBubbles || e.each({
    focus: "focusin",
    blur: "focusout"
  }, function(a, c) {
    var d = function(g) {
      e.event.simulate(c, g.target, e.event.fix(g), !0)
    };
    e.event.special[c] = {
      setup: function() {
        var g = this.ownerDocument || this,
            k = e._data(g, c);
        k || g.addEventListener(a, d, !0);
        e._data(g, c, (k || 0) + 1)
      },
      teardown: function() {
        var g = this.ownerDocument || this,
            k = e._data(g, c) - 1;
        k ? e._data(g, c, k) : (g.removeEventListener(a, d, !0), e._removeData(g, c))
      }
    }
  });
  e.fn.extend({
    on: function(a, c, d, g, k) {
      var l, q;
      if ("object" == typeof a) {
        "string" != typeof c && (d = d || c, c = void 0);
        for (l in a) this.on(l, c, d, a[l], k);
        return this
      }
      if (null == d && null == g ? (g = c, d = c = void 0) : null == g && ("string" == typeof c ? (g = d, d = void 0) : (g = d, d = c, c = void 0)), !1 === g) g = R;
      else if (!g) return this;
      return 1 === k && (q = g, g = function(v) {
        return e().off(v), q.apply(this, arguments)
      }, g.guid = q.guid || (q.guid = e.guid++)), this.each(function() {
        e.event.add(this, a, g, d, c)
      })
    },
    one: function(a, c, d, g) {
      return this.on(a, c, d, g, 1)
    },
    off: function(a, c, d) {
      var g, k;
      if (a && a.preventDefault && a.handleObj) return g = a.handleObj, e(a.delegateTarget).off(g.namespace ? g.origType + "." + g.namespace : g.origType, g.selector, g.handler), this;
      if ("object" == typeof a) {
        for (k in a) this.off(k, c, a[k]);
        return this
      }
      return (!1 === c || "function" == typeof c) && (d = c, c = void 0), !1 === d && (d = R), this.each(function() {
        e.event.remove(this, a, d, c)
      })
    },
    trigger: function(a, c) {
      return this.each(function() {
        e.event.trigger(a, c, this)
      })
    },
    triggerHandler: function(a, c) {
      var d = this[0];
      return d ? e.event.trigger(a, c, d, !0) : void 0
    }
  });
  var hc = "abbr|article|aside|audio|bdi|canvas|data|datalist|details|figcaption|figure|footer|header|hgroup|mark|meter|nav|output|progress|section|summary|time|video",
      sd = / jQuery\d+="(?:null|\d+)"/g,
      zc = new RegExp("<(?:" + hc + ")[\\s/>]", "i"),
      Zb = /^\s+/,
      Ac = /<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,
      Bc = /<([\w:]+)/,
      Cc = /<tbody/i,
      td = /<|&#?\w+;/,
      ud = /<(?:script|style|link)/i,
      vd = /checked\s*(?:[^=]|=\s*.checked.)/i,
      Dc = /^$|\/(?:java|ecma)script/i,
      Sc = /^true\/(.*)/,
      wd = /^\s*<!(?:\[CDATA\[|--)|(?:\]\]|--)>\s*$/g,
      Ra = {
      option: [1, "<select multiple='multiple'>", "</select>"],
      legend: [1, "<fieldset>", "</fieldset>"],
      area: [1, "<map>", "</map>"],
      param: [1, "<object>", "</object>"],
      thead: [1, "<table>", "</table>"],
      tr: [2, "<table><tbody>", "</tbody></table>"],
      col: [2, "<table><tbody></tbody><colgroup>", "</colgroup></table>"],
      td: [3, "<table><tbody><tr>", "</tr></tbody></table>"],
      _default: T.htmlSerialize ? [0, "", ""] : [1, "X<div>", "</div>"]
      },
      $b = P(Y).appendChild(Y.createElement("div"));
  Ra.optgroup =
  Ra.option;
  Ra.tbody = Ra.tfoot = Ra.colgroup = Ra.caption = Ra.thead;
  Ra.th = Ra.td;
  e.extend({
    clone: function(a, c, d) {
      var g, k, l, q = e.contains(a.ownerDocument, a);
      if (T.html5Clone || e.isXMLDoc(a) || !zc.test("<" + a.nodeName + ">") ? k = a.cloneNode(!0) : ($b.innerHTML = a.outerHTML, $b.removeChild(k = $b.firstChild)), !(T.noCloneEvent && T.noCloneChecked || 1 !== a.nodeType && 11 !== a.nodeType || e.isXMLDoc(a))) {
        var v = I(k);
        var z = I(a);
        for (l = 0; null != (g = z[l]); ++l) if (v[l]) {
          var G = void 0,
              A, L = g,
              U = v[l];
          if (1 === U.nodeType) {
            if (A = U.nodeName.toLowerCase(), !T.noCloneEvent && U[e.expando]) {
              g = e._data(U);
              for (G in g.events) e.removeEvent(U, G, g.handle);
              U.removeAttribute(e.expando)
            }
            "script" === A && U.text !== L.text ? (da(U).text = L.text, N(U)) : "object" === A ? (U.parentNode && (U.outerHTML = L.outerHTML), T.html5Clone && L.innerHTML && !e.trim(U.innerHTML) && (U.innerHTML = L.innerHTML)) : "input" === A && Pb.test(L.type) ? (U.defaultChecked = U.checked = L.checked, U.value !== L.value && (U.value = L.value)) : "option" === A ? U.defaultSelected = U.selected = L.defaultSelected : ("input" === A || "textarea" === A) && (U.defaultValue =
            L.defaultValue)
          }
        }
      }
      if (c) if (d) for (z = z || I(a), v = v || I(k), l = 0; null != (g = z[l]); l++) S(g, v[l]);
      else S(a, k);
      return v = I(k, "script"), 0 < v.length && Q(v, !q && I(a, "script")), k
    },
    buildFragment: function(a, c, d, g) {
      for (var k, l, q, v, z, G, A, L = a.length, U = P(c), ba = [], ca = 0; L > ca; ca++) if (l = a[ca], l || 0 === l) if ("object" === e.type(l)) e.merge(ba, l.nodeType ? [l] : l);
      else if (td.test(l)) {
        v = v || U.appendChild(c.createElement("div"));
        z = (Bc.exec(l) || ["", ""])[1].toLowerCase();
        A = Ra[z] || Ra._default;
        v.innerHTML = A[1] + l.replace(Ac, "<$1></$2>") + A[2];
        for (k =
        A[0]; k--;) v = v.lastChild;
        if (!T.leadingWhitespace && Zb.test(l) && ba.push(c.createTextNode(Zb.exec(l)[0])), !T.tbody) for (k = (l = "table" !== z || Cc.test(l) ? "<table>" !== A[1] || Cc.test(l) ? 0 : v : v.firstChild) && l.childNodes.length; k--;) e.nodeName(G = l.childNodes[k], "tbody") && !G.childNodes.length && l.removeChild(G);
        e.merge(ba, v.childNodes);
        for (v.textContent = ""; v.firstChild;) v.removeChild(v.firstChild);
        v = U.lastChild
      } else ba.push(c.createTextNode(l));
      v && U.removeChild(v);
      T.appendChecked || e.grep(I(ba, "input"), O);
      for (ca = 0; l =
      ba[ca++];) if ((!g || -1 === e.inArray(l, g)) && (q = e.contains(l.ownerDocument, l), v = I(U.appendChild(l), "script"), q && Q(v), d)) for (k = 0; l = v[k++];) Dc.test(l.type || "") && d.push(l);
      return U
    },
    cleanData: function(a, c) {
      for (var d, g, k, l, q = 0, v = e.expando, z = e.cache, G = T.deleteExpando, A = e.event.special; null != (d = a[q]); q++) if ((c || e.acceptData(d)) && (k = d[v], l = k && z[k])) {
        if (l.events) for (g in l.events) A[g] ? e.event.remove(d, g) : e.removeEvent(d, g, l.handle);
        z[k] && (delete z[k], G ? delete d[v] : "undefined" !== typeof d.removeAttribute ? d.removeAttribute(v) : d[v] = null, Ya.push(k))
      }
    }
  });
  e.fn.extend({
    text: function(a) {
      return jb(this, function(c) {
        return void 0 === c ? e.text(this) : this.empty().append((this[0] && this[0].ownerDocument || Y).createTextNode(c))
      }, null, a, arguments.length)
    },
    append: function() {
      return this.domManip(arguments, function(a) {
        1 !== this.nodeType && 11 !== this.nodeType && 9 !== this.nodeType || Z(this, a).appendChild(a)
      })
    },
    prepend: function() {
      return this.domManip(arguments, function(a) {
        if (1 === this.nodeType || 11 === this.nodeType || 9 === this.nodeType) {
          var c = Z(this, a);
          c.insertBefore(a, c.firstChild)
        }
      })
    },
    before: function() {
      return this.domManip(arguments, function(a) {
        this.parentNode && this.parentNode.insertBefore(a, this)
      })
    },
    after: function() {
      return this.domManip(arguments, function(a) {
        this.parentNode && this.parentNode.insertBefore(a, this.nextSibling)
      })
    },
    remove: function(a, c) {
      for (var d, g = a ? e.filter(a, this) : this, k = 0; null != (d = g[k]); k++) c || 1 !== d.nodeType || e.cleanData(I(d)), d.parentNode && (c && e.contains(d.ownerDocument, d) && Q(I(d, "script")), d.parentNode.removeChild(d));
      return this
    },
    empty: function() {
      for (var a, c = 0; null != (a = this[c]); c++) {
        for (1 === a.nodeType && e.cleanData(I(a, !1)); a.firstChild;) a.removeChild(a.firstChild);
        a.options && e.nodeName(a, "select") && (a.options.length = 0)
      }
      return this
    },
    clone: function(a, c) {
      return a = null == a ? !1 : a, c = null == c ? a : c, this.map(function() {
        return e.clone(this, a, c)
      })
    },
    html: function(a) {
      return jb(this, function(c) {
        var d = this[0] || {},
            g = 0,
            k = this.length;
        if (void 0 === c) return 1 === d.nodeType ? d.innerHTML.replace(sd, "") : void 0;
        if (!("string" != typeof c || ud.test(c) || !T.htmlSerialize && zc.test(c) || !T.leadingWhitespace && Zb.test(c) || Ra[(Bc.exec(c) || ["", ""])[1].toLowerCase()])) {
          c = c.replace(Ac, "<$1></$2>");
          try {
            for (; k > g; g++) d = this[g] || {}, 1 === d.nodeType && (e.cleanData(I(d, !1)), d.innerHTML = c);
            d = 0
          } catch (l) {}
        }
        d && this.empty().append(c)
      }, null, a, arguments.length)
    },
    replaceWith: function() {
      var a = arguments[0];
      return this.domManip(arguments, function(c) {
        a = this.parentNode;
        e.cleanData(I(this));
        a && a.replaceChild(c, this)
      }), a && (a.length || a.nodeType) ? this : this.remove()
    },
    detach: function(a) {
      return this.remove(a, !0)
    },
    domManip: function(a, c) {
      a = pc.apply([], a);
      var d, g, k, l = 0,
          q = this.length,
          v = this,
          z = q - 1,
          G = a[0],
          A = e.isFunction(G);
      if (A || 1 < q && "string" == typeof G && !T.checkClone && vd.test(G)) return this.each(function(U) {
        var ba = v.eq(U);
        A && (a[0] = G.call(this, U, ba.html()));
        ba.domManip(a, c)
      });
      if (q && (k = e.buildFragment(a, this[0].ownerDocument, !1, this), d = k.firstChild, 1 === k.childNodes.length && (k = d), d)) {
        var L = e.map(I(k, "script"), da);
        for (g = L.length; q > l; l++) d = k, l !== z && (d = e.clone(d, !0, !0), g && e.merge(L, I(d, "script"))), c.call(this[l], d, l);
        if (g) for (k = L[L.length - 1].ownerDocument, e.map(L, N), l = 0; g > l; l++) d = L[l], Dc.test(d.type || "") && !e._data(d, "globalEval") && e.contains(k, d) && (d.src ? e._evalUrl && e._evalUrl(d.src) : e.globalEval((d.text || d.textContent || d.innerHTML || "").replace(wd, "")));
        k = d = null
      }
      return this
    }
  });
  e.each({
    appendTo: "append",
    prependTo: "prepend",
    insertBefore: "before",
    insertAfter: "after",
    replaceAll: "replaceWith"
  }, function(a, c) {
    e.fn[a] = function(d) {
      for (var g = 0, k = [], l = e(d), q = l.length - 1; q >= g; g++) d = g === q ? this : this.clone(!0), e(l[g])[c](d), Tb.apply(k, d.get());
      return this.pushStack(k)
    }
  });
  var vb, ic = {};
  !
  function() {
    var a;
    T.shrinkWrapBlocks = function() {
      if (null != a) return a;
      a = !1;
      var c, d, g;
      return d = Y.getElementsByTagName("body")[0], d && d.style ? (c = Y.createElement("div"), g = Y.createElement("div"), g.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", d.appendChild(g).appendChild(c), "undefined" !== typeof c.style.zoom && (c.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:1px;width:1px;zoom:1", c.appendChild(Y.createElement("div")).style.width = "5px", a = 3 !== c.offsetWidth), d.removeChild(g), a) : void 0
    }
  }();
  var Ec = /^margin/,
      Ab = new RegExp("^(" + Kb + ")(?!px)[a-z%]+$", "i"),
      fb, gb, xd = /^(top|right|bottom|left)$/;
  b.getComputedStyle ? (fb = function(a) {
    return a.ownerDocument.defaultView.getComputedStyle(a, null)
  }, gb = function(a, c, d) {
    var g, k, l, q, v = a.style;
    return d = d || fb(a), q = d ? d.getPropertyValue(c) || d[c] : void 0, d && ("" !== q || e.contains(a.ownerDocument, a) || (q = e.style(a, c)), Ab.test(q) && Ec.test(c) && (g = v.width, k = v.minWidth, l = v.maxWidth, v.minWidth = v.maxWidth = v.width = q, q = d.width, v.width = g, v.minWidth = k, v.maxWidth = l)), void 0 === q ? q : q + ""
  }) : Y.documentElement.currentStyle && (fb = function(a) {
    return a.currentStyle
  }, gb = function(a, c, d) {
    var g, k, l, q, v = a.style;
    return d = d || fb(a), q = d ? d[c] : void 0, null == q && v && v[c] && (q = v[c]), Ab.test(q) && !xd.test(c) && (g = v.left, k = a.runtimeStyle, l = k && k.left, l && (k.left = a.currentStyle.left), v.left = "fontSize" === c ? "1em" : q, q = v.pixelLeft + "px", v.left = g, l && (k.left = l)), void 0 === q ? q : q + "" || "auto"
  });
  !
  function() {
    var a, c, d, g, k, l, q;
    if (a = Y.createElement("div"), a.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>", d = a.getElementsByTagName("a")[0], c = d && d.style) {
      var v = function() {
        var z, G, A, L;
        (G = Y.getElementsByTagName("body")[0]) && G.style && (z = Y.createElement("div"), A = Y.createElement("div"), A.style.cssText = "position:absolute;border:0;width:0;height:0;top:0;left:-9999px", G.appendChild(A).appendChild(z), z.style.cssText = "-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;display:block;margin-top:1%;top:1%;border:1px;padding:1px;width:4px;position:absolute", g = k = !1, q = !0, b.getComputedStyle && (g = "1%" !== (b.getComputedStyle(z, null) || {}).top, k = "4px" === (b.getComputedStyle(z, null) || {
          width: "4px"
        }).width, L = z.appendChild(Y.createElement("div")), L.style.cssText = z.style.cssText = "-webkit-box-sizing:content-box;-moz-box-sizing:content-box;box-sizing:content-box;display:block;margin:0;border:0;padding:0", L.style.marginRight = L.style.width = "0", z.style.width = "1px", q = !parseFloat((b.getComputedStyle(L, null) || {}).marginRight)), z.innerHTML = "<table><tr><td></td><td>t</td></tr></table>", L = z.getElementsByTagName("td"), L[0].style.cssText = "margin:0;border:0;padding:0;display:none", l = 0 === L[0].offsetHeight, l && (L[0].style.display = "", L[1].style.display = "none", l = 0 === L[0].offsetHeight), G.removeChild(A))
      };
      c.cssText = "float:left;opacity:.5";
      T.opacity = "0.5" === c.opacity;
      T.cssFloat = !! c.cssFloat;
      a.style.backgroundClip = "content-box";
      a.cloneNode(!0).style.backgroundClip = "";
      T.clearCloneStyle = "content-box" === a.style.backgroundClip;
      T.boxSizing = "" === c.boxSizing || "" === c.MozBoxSizing || "" === c.WebkitBoxSizing;
      e.extend(T, {
        reliableHiddenOffsets: function() {
          return null == l && v(), l
        },
        boxSizingReliable: function() {
          return null == k && v(), k
        },
        pixelPosition: function() {
          return null == g && v(), g
        },
        reliableMarginRight: function() {
          return null == q && v(), q
        }
      })
    }
  }();
  e.swap = function(a, c, d, g) {
    var k, l = {};
    for (k in c) l[k] = a.style[k], a.style[k] = c[k];
    d = d.apply(a, g || []);
    for (k in c) a.style[k] = l[k];
    return d
  };
  var ac = /alpha\([^)]*\)/i,
      yd = /opacity\s*=\s*([^)]*)/,
      zd = /^(none|table(?!-c[ea]).+)/,
      Tc = new RegExp("^(" + Kb + ")(.*)$", "i"),
      Ad = new RegExp("^([+-])=(" + Kb + ")", "i"),
      Bd = {
      position: "absolute",
      visibility: "hidden",
      display: "block"
      },
      Fc = {
      letterSpacing: "0",
      fontWeight: "400"
      },
      jc = ["Webkit", "O", "Moz", "ms"];
  e.extend({
    cssHooks: {
      opacity: {
        get: function(a, c) {
          if (c) {
            var d = gb(a, "opacity");
            return "" === d ? "1" : d
          }
        }
      }
    },
    cssNumber: {
      columnCount: !0,
      fillOpacity: !0,
      flexGrow: !0,
      flexShrink: !0,
      fontWeight: !0,
      lineHeight: !0,
      opacity: !0,
      order: !0,
      orphans: !0,
      widows: !0,
      zIndex: !0,
      zoom: !0
    },
    cssProps: {
      "float": T.cssFloat ? "cssFloat" : "styleFloat"
    },
    style: function(a, c, d, g) {
      if (a && 3 !== a.nodeType && 8 !== a.nodeType && a.style) {
        var k, l, q, v = e.camelCase(c),
            z = a.style;
        if (c = e.cssProps[v] || (e.cssProps[v] = na(z, v)), q = e.cssHooks[c] || e.cssHooks[v], void 0 === d) return q && "get" in q && void 0 !== (k = q.get(a, !1, g)) ? k : z[c];
        if (l = typeof d, "string" === l && (k = Ad.exec(d)) && (d = (k[1] + 1) * k[2] + parseFloat(e.css(a, c)), l = "number"), null != d && d === d && ("number" !== l || e.cssNumber[v] || (d += "px"), T.clearCloneStyle || "" !== d || 0 !== c.indexOf("background") || (z[c] = "inherit"), !(q && "set" in q && void 0 === (d = q.set(a, d, g))))) try {
          z[c] = d
        } catch (G) {}
      }
    },
    css: function(a, c, d, g) {
      var k, l, q, v = e.camelCase(c);
      return c = e.cssProps[v] || (e.cssProps[v] = na(a.style, v)), q = e.cssHooks[c] || e.cssHooks[v], q && "get" in q && (l = q.get(a, !0, d)), void 0 === l && (l = gb(a, c, g)), "normal" === l && c in Fc && (l = Fc[c]), "" === d || d ? (k = parseFloat(l), !0 === d || e.isNumeric(k) ? k || 0 : l) : l
    }
  });
  e.each(["height", "width"], function(a, c) {
    e.cssHooks[c] = {
      get: function(d, g, k) {
        return g ? zd.test(e.css(d, "display")) && 0 === d.offsetWidth ? e.swap(d, Bd, function() {
          return Da(d, c, k)
        }) : Da(d, c, k) : void 0
      },
      set: function(d, g, k) {
        var l = k && fb(d);
        return mb(d, g, k ? Za(d, c, k, T.boxSizing && "border-box" === e.css(d, "boxSizing", !1, l), l) : 0)
      }
    }
  });
  T.opacity || (e.cssHooks.opacity = {
    get: function(a, c) {
      return yd.test((c && a.currentStyle ? a.currentStyle.filter : a.style.filter) || "") ? .01 * parseFloat(RegExp.$1) + "" : c ? "1" : ""
    },
    set: function(a, c) {
      var d = a.style,
          g = a.currentStyle,
          k = e.isNumeric(c) ? "alpha(opacity=" + 100 * c + ")" : "",
          l = g && g.filter || d.filter || "";
      d.zoom = 1;
      (1 <= c || "" === c) && "" === e.trim(l.replace(ac, "")) && d.removeAttribute && (d.removeAttribute("filter"), "" === c || g && !g.filter) || (d.filter = ac.test(l) ? l.replace(ac, k) : l + " " + k)
    }
  });
  e.cssHooks.marginRight = oa(T.reliableMarginRight, function(a, c) {
    return c ? e.swap(a, {
      display: "inline-block"
    }, gb, [a, "marginRight"]) : void 0
  });
  e.each({
    margin: "",
    padding: "",
    border: "Width"
  }, function(a, c) {
    e.cssHooks[a + c] = {
      expand: function(d) {
        var g = 0,
            k = {};
        for (d = "string" == typeof d ? d.split(" ") : [d]; 4 > g; g++) k[a + eb[g] + c] = d[g] || d[g - 2] || d[0];
        return k
      }
    };
    Ec.test(a) || (e.cssHooks[a + c].set = mb)
  });
  e.fn.extend({
    css: function(a, c) {
      return jb(this, function(d, g, k) {
        var l, q = {},
            v = 0;
        if (e.isArray(g)) {
          k = fb(d);
          for (l = g.length; l > v; v++) q[g[v]] = e.css(d, g[v], !1, k);
          return q
        }
        return void 0 !== k ? e.style(d, g, k) : e.css(d, g)
      }, a, c, 1 < arguments.length)
    },
    show: function() {
      return wa(this, !0)
    },
    hide: function() {
      return wa(this)
    },
    toggle: function(a) {
      return "boolean" == typeof a ? a ? this.show() : this.hide() : this.each(function() {
        wb(this) ? e(this).show() : e(this).hide()
      })
    }
  });
  e.Tween = pa;
  pa.prototype = {
    constructor: pa,
    init: function(a, c, d, g, k, l) {
      this.elem = a;
      this.prop = d;
      this.easing = k || "swing";
      this.options = c;
      this.start = this.now = this.cur();
      this.end =
      g;
      this.unit = l || (e.cssNumber[d] ? "" : "px")
    },
    cur: function() {
      var a = pa.propHooks[this.prop];
      return a && a.get ? a.get(this) : pa.propHooks._default.get(this)
    },
    run: function(a) {
      var c, d = pa.propHooks[this.prop];
      return this.pos = c = this.options.duration ? e.easing[this.easing](a, this.options.duration * a, 0, 1, this.options.duration) : a, this.now = (this.end - this.start) * c + this.start, this.options.step && this.options.step.call(this.elem, this.now, this), d && d.set ? d.set(this) : pa.propHooks._default.set(this), this
    }
  };
  pa.prototype.init.prototype =
  pa.prototype;
  pa.propHooks = {
    _default: {
      get: function(a) {
        var c;
        return null == a.elem[a.prop] || a.elem.style && null != a.elem.style[a.prop] ? (c = e.css(a.elem, a.prop, ""), c && "auto" !== c ? c : 0) : a.elem[a.prop]
      },
      set: function(a) {
        e.fx.step[a.prop] ? e.fx.step[a.prop](a) : a.elem.style && (null != a.elem.style[e.cssProps[a.prop]] || e.cssHooks[a.prop]) ? e.style(a.elem, a.prop, a.now + a.unit) : a.elem[a.prop] = a.now
      }
    }
  };
  pa.propHooks.scrollTop = pa.propHooks.scrollLeft = {
    set: function(a) {
      a.elem.nodeType && a.elem.parentNode && (a.elem[a.prop] = a.now)
    }
  };
  e.easing = {
    linear: function(a) {
      return a
    },
    swing: function(a) {
      return .5 - Math.cos(a * Math.PI) / 2
    }
  };
  e.fx = pa.prototype.init;
  e.fx.step = {};
  var nb, Lb, Cd = /^(?:toggle|show|hide)$/,
      Gc = new RegExp("^(?:([+-])=|)(" + Kb + ")([a-z%]*)$", "i"),
      Dd = /queueHooks$/,
      Cb = [function(a, c, d) {
      var g, k, l, q, v, z, G, A = this,
          L = {},
          U = a.style,
          ba = a.nodeType && wb(a),
          ca = e._data(a, "fxshow");
      d.queue || (q = e._queueHooks(a, "fx"), null == q.unqueued && (q.unqueued = 0, v = q.empty.fire, q.empty.fire = function() {
        q.unqueued || v()
      }), q.unqueued++, A.always(function() {
        A.always(function() {
          q.unqueued--;
          e.queue(a, "fx").length || q.empty.fire()
        })
      }));
      1 === a.nodeType && ("height" in c || "width" in c) && (d.overflow = [U.overflow, U.overflowX, U.overflowY], z = e.css(a, "display"), G = "none" === z ? e._data(a, "olddisplay") || aa(a.nodeName) : z, "inline" === G && "none" === e.css(a, "float") && (T.inlineBlockNeedsLayout && "inline" !== aa(a.nodeName) ? U.zoom = 1 : U.display = "inline-block"));
      d.overflow && (U.overflow = "hidden", T.shrinkWrapBlocks() || A.always(function() {
        U.overflow = d.overflow[0];
        U.overflowX = d.overflow[1];
        U.overflowY = d.overflow[2]
      }));
      for (g in c) if (k =
      c[g], Cd.exec(k)) {
        if (delete c[g], l = l || "toggle" === k, k === (ba ? "hide" : "show")) {
          if ("show" !== k || !ca || void 0 === ca[g]) continue;
          ba = !0
        }
        L[g] = ca && ca[g] || e.style(a, g)
      } else z = void 0;
      if (e.isEmptyObject(L))"inline" === ("none" === z ? aa(a.nodeName) : z) && (U.display = z);
      else
      for (g in ca ? "hidden" in ca && (ba = ca.hidden) : ca = e._data(a, "fxshow", {}), l && (ca.hidden = !ba), ba ? e(a).show() : A.done(function() {
        e(a).hide()
      }), A.done(function() {
        var ya;
        e._removeData(a, "fxshow");
        for (ya in L) e.style(a, ya, L[ya])
      }), L) c = pb(ba ? ca[g] : 0, g, A), g in ca || (ca[g] = c.start, ba && (c.end = c.start, c.start = "width" === g || "height" === g ? 1 : 0))
    }],
      xb = {
      "*": [function(a, c) {
        var d = this.createTween(a, c),
            g = d.cur(),
            k = Gc.exec(c),
            l = k && k[3] || (e.cssNumber[a] ? "" : "px"),
            q = (e.cssNumber[a] || "px" !== l && +g) && Gc.exec(e.css(d.elem, a)),
            v = 1,
            z = 20;
        if (q && q[3] !== l) {
          l = l || q[3];
          k = k || [];
          q = +g || 1;
          do v = v || ".5", q /= v, e.style(d.elem, a, q + l);
          while (v !== (v = d.cur() / g) && 1 !== v && --z)
        }
        return k && (q = d.start = +q || +g || 0, d.unit = l, d.end = k[1] ? q + (k[1] + 1) * k[2] : +k[2]), d
      }]
      };
  e.Animation = e.extend(kc, {
    tweener: function(a, c) {
      e.isFunction(a) ? (c = a, a = ["*"]) : a = a.split(" ");
      for (var d, g = 0, k = a.length; k > g; g++) d = a[g], xb[d] = xb[d] || [], xb[d].unshift(c)
    },
    prefilter: function(a, c) {
      c ? Cb.unshift(a) : Cb.push(a)
    }
  });
  e.speed = function(a, c, d) {
    var g = a && "object" == typeof a ? e.extend({}, a) : {
      complete: d || !d && c || e.isFunction(a) && a,
      duration: a,
      easing: d && c || c && !e.isFunction(c) && c
    };
    return g.duration = e.fx.off ? 0 : "number" == typeof g.duration ? g.duration : g.duration in e.fx.speeds ? e.fx.speeds[g.duration] : e.fx.speeds._default, (null == g.queue || !0 === g.queue) && (g.queue = "fx"), g.old =
    g.complete, g.complete = function() {
      e.isFunction(g.old) && g.old.call(this);
      g.queue && e.dequeue(this, g.queue)
    }, g
  };
  e.fn.extend({
    fadeTo: function(a, c, d, g) {
      return this.filter(wb).css("opacity", 0).show().end().animate({
        opacity: c
      }, a, d, g)
    },
    animate: function(a, c, d, g) {
      var k = e.isEmptyObject(a),
          l = e.speed(c, d, g);
      c = function() {
        var q = kc(this, e.extend({}, a), l);
        (k || e._data(this, "finish")) && q.stop(!0)
      };
      return c.finish = c, k || !1 === l.queue ? this.each(c) : this.queue(l.queue, c)
    },
    stop: function(a, c, d) {
      var g = function(k) {
        var l = k.stop;
        delete k.stop;
        l(d)
      };
      return "string" != typeof a && (d = c, c = a, a = void 0), c && !1 !== a && this.queue(a || "fx", []), this.each(function() {
        var k = !0,
            l = null != a && a + "queueHooks",
            q = e.timers,
            v = e._data(this);
        if (l) v[l] && v[l].stop && g(v[l]);
        else
        for (l in v) v[l] && v[l].stop && Dd.test(l) && g(v[l]);
        for (l = q.length; l--;) q[l].elem !== this || null != a && q[l].queue !== a || (q[l].anim.stop(d), k = !1, q.splice(l, 1));
        !k && d || e.dequeue(this, a)
      })
    },
    finish: function(a) {
      return !1 !== a && (a = a || "fx"), this.each(function() {
        var c = e._data(this),
            d = c[a + "queue"];
        var g =
        c[a + "queueHooks"];
        var k = e.timers,
            l = d ? d.length : 0;
        c.finish = !0;
        e.queue(this, a, []);
        g && g.stop && g.stop.call(this, !0);
        for (g = k.length; g--;) k[g].elem === this && k[g].queue === a && (k[g].anim.stop(!0), k.splice(g, 1));
        for (g = 0; l > g; g++) d[g] && d[g].finish && d[g].finish.call(this);
        delete c.finish
      })
    }
  });
  e.each(["toggle", "show", "hide"], function(a, c) {
    var d = e.fn[c];
    e.fn[c] = function(g, k, l) {
      return null == g || "boolean" == typeof g ? d.apply(this, arguments) : this.animate(ob(c, !0), g, k, l)
    }
  });
  e.each({
    slideDown: ob("show"),
    slideUp: ob("hide"),
    slideToggle: ob("toggle"),
    fadeIn: {
      opacity: "show"
    },
    fadeOut: {
      opacity: "hide"
    },
    fadeToggle: {
      opacity: "toggle"
    }
  }, function(a, c) {
    e.fn[a] = function(d, g, k) {
      return this.animate(c, d, g, k)
    }
  });
  e.timers = [];
  e.fx.tick = function() {
    var a = e.timers,
        c = 0;
    for (nb = e.now(); c < a.length; c++) {
      var d = a[c];
      d() || a[c] !== d || a.splice(c--, 1)
    }
    a.length || e.fx.stop();
    nb = void 0
  };
  e.fx.timer = function(a) {
    e.timers.push(a);
    a() ? e.fx.start() : e.timers.pop()
  };
  e.fx.interval = 13;
  e.fx.start = function() {
    Lb || (Lb = setInterval(e.fx.tick, e.fx.interval))
  };
  e.fx.stop =

  function() {
    clearInterval(Lb);
    Lb = null
  };
  e.fx.speeds = {
    slow: 600,
    fast: 200,
    _default: 400
  };
  e.fn.delay = function(a, c) {
    return a = e.fx ? e.fx.speeds[a] || a : a, c = c || "fx", this.queue(c, function(d, g) {
      var k = setTimeout(d, a);
      g.stop = function() {
        clearTimeout(k)
      }
    })
  };
  (function() {
    var a = Y.createElement("div");
    a.setAttribute("className", "t");
    a.innerHTML = "  <link/><table></table><a href='/a'>a</a><input type='checkbox'/>";
    var c = a.getElementsByTagName("a")[0];
    var d = Y.createElement("select");
    var g = d.appendChild(Y.createElement("option"));
    var k = a.getElementsByTagName("input")[0];
    c.style.cssText = "top:1px";
    T.getSetAttribute = "t" !== a.className;
    T.style = /top/.test(c.getAttribute("style"));
    T.hrefNormalized = "/a" === c.getAttribute("href");
    T.checkOn = !! k.value;
    T.optSelected = g.selected;
    T.enctype = !! Y.createElement("form").enctype;
    d.disabled = !0;
    T.optDisabled = !g.disabled;
    k = Y.createElement("input");
    k.setAttribute("value", "");
    T.input = "" === k.getAttribute("value");
    k.value = "t";
    k.setAttribute("type", "radio");
    T.radioValue = "t" === k.value
  })();
  var Ed = /\r/g;
  e.fn.extend({
    val: function(a) {
      var c, d, g, k = this[0];
      if (arguments.length) return g = e.isFunction(a), this.each(function(l) {
        var q;
        1 === this.nodeType && (q = g ? a.call(this, l, e(this).val()) : a, null == q ? q = "" : "number" == typeof q ? q += "" : e.isArray(q) && (q = e.map(q, function(v) {
          return null == v ? "" : v + ""
        })), c = e.valHooks[this.type] || e.valHooks[this.nodeName.toLowerCase()], c && "set" in c && void 0 !== c.set(this, q, "value") || (this.value = q))
      });
      if (k) return c = e.valHooks[k.type] || e.valHooks[k.nodeName.toLowerCase()], c && "get" in c && void 0 !== (d = c.get(k, "value")) ? d : (d = k.value, "string" == typeof d ? d.replace(Ed, "") : null == d ? "" : d)
    }
  });
  e.extend({
    valHooks: {
      option: {
        get: function(a) {
          var c = e.find.attr(a, "value");
          return null != c ? c : e.trim(e.text(a))
        }
      },
      select: {
        get: function(a) {
          for (var c, d = a.options, g = a.selectedIndex, k = "select-one" === a.type || 0 > g, l = k ? null : [], q = k ? g + 1 : d.length, v = 0 > g ? q : k ? g : 0; q > v; v++) if (c = d[v], !(!c.selected && v !== g || (T.optDisabled ? c.disabled : null !== c.getAttribute("disabled")) || c.parentNode.disabled && e.nodeName(c.parentNode, "optgroup"))) {
            if (a =
            e(c).val(), k) return a;
            l.push(a)
          }
          return l
        },
        set: function(a, c) {
          for (var d, g, k = a.options, l = e.makeArray(c), q = k.length; q--;) if (g = k[q], 0 <= e.inArray(e.valHooks.option.get(g), l)) try {
            g.selected = d = !0
          } catch (v) {
            g.scrollHeight
          } else g.selected = !1;
          return d || (a.selectedIndex = -1), k
        }
      }
    }
  });
  e.each(["radio", "checkbox"], function() {
    e.valHooks[this] = {
      set: function(a, c) {
        return e.isArray(c) ? a.checked = 0 <= e.inArray(e(a).val(), c) : void 0
      }
    };
    T.checkOn || (e.valHooks[this].get = function(a) {
      return null === a.getAttribute("value") ? "on" : a.value
    })
  });
  var tb, db = e.expr.attrHandle,
      bc = /^(?:checked|selected)$/i,
      kb = T.getSetAttribute,
      Mb = T.input;
  e.fn.extend({
    attr: function(a, c) {
      return jb(this, e.attr, a, c, 1 < arguments.length)
    },
    removeAttr: function(a) {
      return this.each(function() {
        e.removeAttr(this, a)
      })
    }
  });
  e.extend({
    attr: function(a, c, d) {
      var g, k, l = a.nodeType;
      if (a && 3 !== l && 8 !== l && 2 !== l) return "undefined" === typeof a.getAttribute ? e.prop(a, c, d) : (1 === l && e.isXMLDoc(a) || (c = c.toLowerCase(), g = e.attrHooks[c] || (e.expr.match.bool.test(c) ? Fd : tb)), void 0 === d ? g && "get" in g && null !== (k = g.get(a, c)) ? k : (k = e.find.attr(a, c), null == k ? void 0 : k) : null !== d ? g && "set" in g && void 0 !== (k = g.set(a, d, c)) ? k : (a.setAttribute(c, d + ""), d) : void e.removeAttr(a, c))
    },
    removeAttr: function(a, c) {
      var d, g = 0,
          k = c && c.match(Va);
      if (k && 1 === a.nodeType) for (; d = k[g++];) {
        var l = e.propFix[d] || d;
        e.expr.match.bool.test(d) ? Mb && kb || !bc.test(d) ? a[l] = !1 : a[e.camelCase("default-" + d)] = a[l] = !1 : e.attr(a, d, "");
        a.removeAttribute(kb ? d : l)
      }
    },
    attrHooks: {
      type: {
        set: function(a, c) {
          if (!T.radioValue && "radio" === c && e.nodeName(a, "input")) {
            var d = a.value;
            return a.setAttribute("type", c), d && (a.value = d), c
          }
        }
      }
    }
  });
  var Fd = {
    set: function(a, c, d) {
      return !1 === c ? e.removeAttr(a, d) : Mb && kb || !bc.test(d) ? a.setAttribute(!kb && e.propFix[d] || d, d) : a[e.camelCase("default-" + d)] = a[d] = !0, d
    }
  };
  e.each(e.expr.match.bool.source.match(/\w+/g), function(a, c) {
    var d = db[c] || e.find.attr;
    db[c] = Mb && kb || !bc.test(c) ?
    function(g, k, l) {
      var q, v;
      return l || (v = db[k], db[k] = q, q = null != d(g, k, l) ? k.toLowerCase() : null, db[k] = v), q
    } : function(g, k, l) {
      return l ? void 0 : g[e.camelCase("default-" + k)] ? k.toLowerCase() : null
    }
  });
  Mb && kb || (e.attrHooks.value = {
    set: function(a, c, d) {
      return e.nodeName(a, "input") ? void(a.defaultValue = c) : tb && tb.set(a, c, d)
    }
  });
  kb || (tb = {
    set: function(a, c, d) {
      var g = a.getAttributeNode(d);
      return g || a.setAttributeNode(g = a.ownerDocument.createAttribute(d)), g.value = c += "", "value" === d || c === a.getAttribute(d) ? c : void 0
    }
  }, db.id = db.name = db.coords = function(a, c, d) {
    var g;
    return d ? void 0 : (g = a.getAttributeNode(c)) && "" !== g.value ? g.value : null
  }, e.valHooks.button = {
    get: function(a, c) {
      var d = a.getAttributeNode(c);
      return d && d.specified ? d.value : void 0
    },
    set: tb.set
  }, e.attrHooks.contenteditable = {
    set: function(a, c, d) {
      tb.set(a, "" === c ? !1 : c, d)
    }
  }, e.each(["width", "height"], function(a, c) {
    e.attrHooks[c] = {
      set: function(d, g) {
        return "" === g ? (d.setAttribute(c, "auto"), g) : void 0
      }
    }
  }));
  T.style || (e.attrHooks.style = {
    get: function(a) {
      return a.style.cssText || void 0
    },
    set: function(a, c) {
      return a.style.cssText = c + ""
    }
  });
  var Gd = /^(?:input|select|textarea|button|object)$/i,
      Hd = /^(?:a|area)$/i;
  e.fn.extend({
    prop: function(a, c) {
      return jb(this, e.prop, a, c, 1 < arguments.length)
    },
    removeProp: function(a) {
      return a = e.propFix[a] || a, this.each(function() {
        try {
          this[a] = void 0, delete this[a]
        } catch (c) {}
      })
    }
  });
  e.extend({
    propFix: {
      "for": "htmlFor",
      "class": "className"
    },
    prop: function(a, c, d) {
      var g, k, l, q = a.nodeType;
      if (a && 3 !== q && 8 !== q && 2 !== q) return l = 1 !== q || !e.isXMLDoc(a), l && (c = e.propFix[c] || c, k = e.propHooks[c]), void 0 !== d ? k && "set" in k && void 0 !== (g = k.set(a, d, c)) ? g : a[c] = d : k && "get" in k && null !== (g = k.get(a, c)) ? g : a[c]
    },
    propHooks: {
      tabIndex: {
        get: function(a) {
          var c = e.find.attr(a, "tabindex");
          return c ? parseInt(c, 10) : Gd.test(a.nodeName) || Hd.test(a.nodeName) && a.href ? 0 : -1
        }
      }
    }
  });
  T.hrefNormalized || e.each(["href", "src"], function(a, c) {
    e.propHooks[c] = {
      get: function(d) {
        return d.getAttribute(c, 4)
      }
    }
  });
  T.optSelected || (e.propHooks.selected = {
    get: function(a) {
      a = a.parentNode;
      return a && (a.selectedIndex, a.parentNode && a.parentNode.selectedIndex), null
    }
  });
  e.each("tabIndex readOnly maxLength cellSpacing cellPadding rowSpan colSpan useMap frameBorder contentEditable".split(" "), function() {
    e.propFix[this.toLowerCase()] = this
  });
  T.enctype || (e.propFix.enctype = "encoding");
  var cc = /[\t\r\n\f]/g;
  e.fn.extend({
    addClass: function(a) {
      var c, d, g, k, l = 0,
          q = this.length;
      var v = "string" == typeof a && a;
      if (e.isFunction(a)) return this.each(function(z) {
        e(this).addClass(a.call(this, z, this.className))
      });
      if (v) for (v = (a || "").match(Va) || []; q > l; l++) if (c = this[l], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(cc, " ") : " ")) {
        for (k = 0; g = v[k++];) 0 > d.indexOf(" " + g + " ") && (d += g + " ");
        d = e.trim(d);
        c.className !== d && (c.className = d)
      }
      return this
    },
    removeClass: function(a) {
      var c, d, g, k, l = 0,
          q = this.length;
      var v = 0 === arguments.length || "string" == typeof a && a;
      if (e.isFunction(a)) return this.each(function(z) {
        e(this).removeClass(a.call(this, z, this.className))
      });
      if (v) for (v = (a || "").match(Va) || []; q > l; l++) if (c = this[l], d = 1 === c.nodeType && (c.className ? (" " + c.className + " ").replace(cc, " ") : "")) {
        for (k = 0; g = v[k++];) for (; 0 <= d.indexOf(" " + g + " ");) d = d.replace(" " + g + " ", " ");
        d = a ? e.trim(d) : "";
        c.className !== d && (c.className = d)
      }
      return this
    },
    toggleClass: function(a, c) {
      var d = typeof a;
      return "boolean" == typeof c && "string" === d ? c ? this.addClass(a) : this.removeClass(a) : this.each(e.isFunction(a) ?
      function(g) {
        e(this).toggleClass(a.call(this, g, this.className, c), c)
      } : function() {
        if ("string" === d) for (var g, k = 0, l = e(this), q = a.match(Va) || []; g = q[k++];) l.hasClass(g) ? l.removeClass(g) : l.addClass(g);
        else("undefined" === d || "boolean" === d) && (this.className && e._data(this, "__className__", this.className), this.className = this.className || !1 === a ? "" : e._data(this, "__className__") || "")
      })
    },
    hasClass: function(a) {
      a = " " + a + " ";
      for (var c = 0, d = this.length; d > c; c++) if (1 === this[c].nodeType && 0 <= (" " + this[c].className + " ").replace(cc, " ").indexOf(a)) return !0;
      return !1
    }
  });
  e.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error contextmenu".split(" "), function(a, c) {
    e.fn[c] = function(d, g) {
      return 0 < arguments.length ? this.on(c, null, d, g) : this.trigger(c)
    }
  });
  e.fn.extend({
    hover: function(a, c) {
      return this.mouseenter(a).mouseleave(c || a)
    },
    bind: function(a, c, d) {
      return this.on(a, null, c, d)
    },
    unbind: function(a, c) {
      return this.off(a, null, c)
    },
    delegate: function(a, c, d, g) {
      return this.on(c, a, d, g)
    },
    undelegate: function(a, c, d) {
      return 1 === arguments.length ? this.off(a, "**") : this.off(c, a || "**", d)
    }
  });
  var dc = e.now(),
      ec = /\?/,
      Id = /(,)|(\[|{)|(}|])|"(?:[^"\\\r\n]|\\["\\\/bfnrt]|\\u[\da-fA-F]{4})*"\s*:?|true|false|null|-?(?!0\d)\d+(?:\.\d+|)(?:[eE][+-]?\d+|)/g;
  e.parseJSON = function(a) {
    if (b.JSON && b.JSON.parse) return b.JSON.parse(a + "");
    var c, d = null,
        g = e.trim(a + "");
    return g && !e.trim(g.replace(Id, function(k, l, q, v) {
      return c && l && (d = 0), 0 === d ? k : (c = q || l, d += !v - !q, "")
    })) ? Function("return " + g)() : e.error("Invalid JSON: " + a)
  };
  e.parseXML = function(a) {
    var c, d;
    if (!a || "string" != typeof a) return null;
    try {
      b.DOMParser ? (d = new DOMParser, c = d.parseFromString(a, "text/xml")) : (c = new ActiveXObject("Microsoft.XMLDOM"), c.async = "false", c.loadXML(a))
    } catch (g) {
      c = void 0
    }
    return c && c.documentElement && !c.getElementsByTagName("parsererror").length || e.error("Invalid XML: " + a), c
  };
  var Jd = /#.*$/,
      Hc = /([?&])_=[^&]*/,
      Kd = /^(.*?):[ \t]*([^\r\n]*)\r?$/gm,
      Ld = /^(?:GET|HEAD)$/,
      Md = /^\/\//,
      Ic = /^([\w.+-]+:)(?:\/\/(?:[^\/?#]*@|)([^\/?#:]*)(?::(\d+)|)|)/,
      Jc = {},
      Qb = {},
      Kc = "*/".concat("*");
  try {
    var lb = location.href
  } catch (a) {
    lb = Y.createElement("a"), lb.href = "", lb = lb.href
  }
  var ub = Ic.exec(lb.toLowerCase()) || [];
  e.extend({
    active: 0,
    lastModified: {},
    etag: {},
    ajaxSettings: {
      url: lb,
      type: "GET",
      isLocal: /^(?:about|app|app-storage|.+-extension|file|res|widget):$/.test(ub[1]),
      global: !0,
      processData: !0,
      async: !0,
      contentType: "application/x-www-form-urlencoded; charset=UTF-8",
      accepts: {
        "*": Kc,
        text: "text/plain",
        html: "text/html",
        xml: "application/xml, text/xml",
        json: "application/json, text/javascript"
      },
      contents: {
        xml: /xml/,
        html: /html/,
        json: /json/
      },
      responseFields: {
        xml: "responseXML",
        text: "responseText",
        json: "responseJSON"
      },
      converters: {
        "* text": String,
        "text html": !0,
        "text json": e.parseJSON,
        "text xml": e.parseXML
      },
      flatOptions: {
        url: !0,
        context: !0
      }
    },
    ajaxSetup: function(a, c) {
      return c ? Rb(Rb(a, e.ajaxSettings), c) : Rb(e.ajaxSettings, a)
    },
    ajaxPrefilter: lc(Jc),
    ajaxTransport: lc(Qb),
    ajax: function(a, c) {
      function d(ia, ra, ua, sa) {
        var Ma, Ia, za, Ha = ra;
        if (2 !== Na) {
          Na = 2;
          q && clearTimeout(q);
          z = void 0;
          l = sa || "";
          ha.readyState = 0 < ia ? 4 : 0;
          sa = 200 <= ia && 300 > ia || 304 === ia;
          if (ua) {
            var va = A;
            for (var Oa = ha, ka, Ea, Aa, ta, rb = va.contents, Qa = va.dataTypes;
            "*" === Qa[0];) Qa.shift(), void 0 === Ea && (Ea = va.mimeType || Oa.getResponseHeader("Content-Type"));
            if (Ea) for (ta in rb) if (rb[ta] && rb[ta].test(Ea)) {
              Qa.unshift(ta);
              break
            }
            if (Qa[0] in ua) Aa = Qa[0];
            else {
              for (ta in ua) {
                if (!Qa[0] || va.converters[ta + " " + Qa[0]]) {
                  Aa = ta;
                  break
                }
                ka || (ka = ta)
              }
              Aa = Aa || ka
            }
            va =
            Aa ? (Aa !== Qa[0] && Qa.unshift(Aa), ua[Aa]) : void 0
          }
          a: {
            ua = A;
            ka = va;
            Ea = ha;
            Aa = sa;
            var Ja, Ta, Ua;
            va = {};
            Oa = ua.dataTypes.slice();
            if (Oa[1]) for (Ja in ua.converters) va[Ja.toLowerCase()] = ua.converters[Ja];
            for (ta = Oa.shift(); ta;) if (ua.responseFields[ta] && (Ea[ua.responseFields[ta]] = ka), !Ua && Aa && ua.dataFilter && (ka = ua.dataFilter(ka, ua.dataType)), Ua = ta, ta = Oa.shift()) if ("*" === ta) ta = Ua;
            else if ("*" !== Ua && Ua !== ta) {
              if (Ja = va[Ua + " " + ta] || va["* " + ta], !Ja) for (La in va) if (Ta = La.split(" "), Ta[1] === ta && (Ja = va[Ua + " " + Ta[0]] || va["* " + Ta[0]])) {
                !0 === Ja ? Ja = va[La] : !0 !== va[La] && (ta = Ta[0], Oa.unshift(Ta[1]));
                break
              }
              if (!0 !== Ja) if (Ja && ua["throws"]) ka = Ja(ka);
              else
              try {
                ka = Ja(ka)
              } catch (Vb) {
                var La = {
                  state: "parsererror",
                  error: Ja ? Vb : "No conversion from " + Ua + " to " + ta
                };
                break a
              }
            }
            La = {
              state: "success",
              data: ka
            }
          }
          va = La;sa ? (A.ifModified && (za = ha.getResponseHeader("Last-Modified"), za && (e.lastModified[Ka] = za), za = ha.getResponseHeader("etag"), za && (e.etag[Ka] = za)), 204 === ia || "HEAD" === A.type ? Ha = "nocontent" : 304 === ia ? Ha = "notmodified" : (Ha = va.state, Ma = va.data, Ia = va.error, sa = !Ia)) : (Ia = Ha, (ia || !Ha) && (Ha = "error", 0 > ia && (ia = 0)));ha.status = ia;ha.statusText = (ra || Ha) + "";sa ? ba.resolveWith(L, [Ma, Ha, ha]) : ba.rejectWith(L, [ha, Ha, Ia]);ha.statusCode(ya);ya = void 0;v && U.trigger(sa ? "ajaxSuccess" : "ajaxError", [ha, A, sa ? Ma : Ia]);ca.fireWith(L, [ha, Ha]);v && (U.trigger("ajaxComplete", [ha, A]), --e.active || e.event.trigger("ajaxStop"))
        }
      }
      "object" == typeof a && (c = a, a = void 0);
      c = c || {};
      var g, k, l, q, v, z, G, A = e.ajaxSetup({}, c),
          L = A.context || A,
          U = A.context && (L.nodeType || L.jquery) ? e(L) : e.event,
          ba = e.Deferred(),
          ca = e.Callbacks("once memory"),
          ya = A.statusCode || {},
          Ba = {},
          Wa = {},
          Na = 0,
          Xa = "canceled",
          ha = {
          readyState: 0,
          getResponseHeader: function(ia) {
            var ra;
            if (2 === Na) {
              if (!G) for (G = {}; ra = Kd.exec(l);) G[ra[1].toLowerCase()] = ra[2];
              ra = G[ia.toLowerCase()]
            }
            return null == ra ? null : ra
          },
          getAllResponseHeaders: function() {
            return 2 === Na ? l : null
          },
          setRequestHeader: function(ia, ra) {
            var ua = ia.toLowerCase();
            return Na || (ia = Wa[ua] = Wa[ua] || ia, Ba[ia] = ra), this
          },
          overrideMimeType: function(ia) {
            return Na || (A.mimeType = ia), this
          },
          statusCode: function(ia) {
            var ra;
            if (ia) if (2 > Na) for (ra in ia) ya[ra] = [ya[ra], ia[ra]];
            else ha.always(ia[ha.status]);
            return this
          },
          abort: function(ia) {
            ia = ia || Xa;
            return z && z.abort(ia), d(0, ia), this
          }
          };
      if (ba.promise(ha).complete = ca.add, ha.success = ha.done, ha.error = ha.fail, A.url = ((a || A.url || lb) + "").replace(Jd, "").replace(Md, ub[1] + "//"), A.type = c.method || c.type || A.method || A.type, A.dataTypes = e.trim(A.dataType || "*").toLowerCase().match(Va) || [""], null == A.crossDomain && (g = Ic.exec(A.url.toLowerCase()), A.crossDomain = !(!g || g[1] === ub[1] && g[2] === ub[2] && (g[3] || ("http:" === g[1] ? "80" : "443")) === (ub[3] || ("http:" === ub[1] ? "80" : "443")))), A.data && A.processData && "string" != typeof A.data && (A.data = e.param(A.data, A.traditional)), mc(Jc, A, c, ha), 2 === Na) return ha;
      (v = A.global) && 0 === e.active++ && e.event.trigger("ajaxStart");
      A.type = A.type.toUpperCase();
      A.hasContent = !Ld.test(A.type);
      var Ka = A.url;
      A.hasContent || (A.data && (Ka = A.url += (ec.test(Ka) ? "&" : "?") + A.data, delete A.data), !1 === A.cache && (A.url = Hc.test(Ka) ? Ka.replace(Hc, "$1_=" + dc++) : Ka + (ec.test(Ka) ? "&" : "?") + "_=" + dc++));
      A.ifModified && (e.lastModified[Ka] && ha.setRequestHeader("If-Modified-Since", e.lastModified[Ka]), e.etag[Ka] && ha.setRequestHeader("If-None-Match", e.etag[Ka]));
      (A.data && A.hasContent && !1 !== A.contentType || c.contentType) && ha.setRequestHeader("Content-Type", A.contentType);
      ha.setRequestHeader("Accept", A.dataTypes[0] && A.accepts[A.dataTypes[0]] ? A.accepts[A.dataTypes[0]] + ("*" !== A.dataTypes[0] ? ", " + Kc + "; q=0.01" : "") : A.accepts["*"]);
      for (k in A.headers) ha.setRequestHeader(k, A.headers[k]);
      if (A.beforeSend && (!1 === A.beforeSend.call(L, ha, A) || 2 === Na)) return ha.abort();
      Xa = "abort";
      for (k in {
        success: 1,
        error: 1,
        complete: 1
      }) ha[k](A[k]);
      if (z = mc(Qb, A, c, ha)) {
        ha.readyState = 1;
        v && U.trigger("ajaxSend", [ha, A]);
        A.async && 0 < A.timeout && (q = setTimeout(function() {
          ha.abort("timeout")
        }, A.timeout));
        try {
          Na = 1, z.send(Ba, d)
        } catch (ia) {
          if (!(2 > Na)) throw ia;
          d(-1, ia)
        }
      } else d(-1, "No Transport");
      return ha
    },
    getJSON: function(a, c, d) {
      return e.get(a, c, d, "json")
    },
    getScript: function(a, c) {
      return e.get(a, void 0, c, "script")
    }
  });
  e.each(["get", "post"], function(a, c) {
    e[c] = function(d, g, k, l) {
      return e.isFunction(g) && (l = l || k, k = g, g = void 0), e.ajax({
        url: d,
        type: c,
        dataType: l,
        data: g,
        success: k
      })
    }
  });
  e.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "), function(a, c) {
    e.fn[c] = function(d) {
      return this.on(c, d)
    }
  });
  e._evalUrl = function(a) {
    return e.ajax({
      url: a,
      type: "GET",
      dataType: "script",
      async: !1,
      global: !1,
      "throws": !0
    })
  };
  e.fn.extend({
    wrapAll: function(a) {
      if (e.isFunction(a)) return this.each(function(d) {
        e(this).wrapAll(a.call(this, d))
      });
      if (this[0]) {
        var c =
        e(a, this[0].ownerDocument).eq(0).clone(!0);
        this[0].parentNode && c.insertBefore(this[0]);
        c.map(function() {
          for (var d = this; d.firstChild && 1 === d.firstChild.nodeType;) d = d.firstChild;
          return d
        }).append(this)
      }
      return this
    },
    wrapInner: function(a) {
      return this.each(e.isFunction(a) ?
      function(c) {
        e(this).wrapInner(a.call(this, c))
      } : function() {
        var c = e(this),
            d = c.contents();
        d.length ? d.wrapAll(a) : c.append(a)
      })
    },
    wrap: function(a) {
      var c = e.isFunction(a);
      return this.each(function(d) {
        e(this).wrapAll(c ? a.call(this, d) : a)
      })
    },
    unwrap: function() {
      return this.parent().each(function() {
        e.nodeName(this, "body") || e(this).replaceWith(this.childNodes)
      }).end()
    }
  });
  e.expr.filters.hidden = function(a) {
    return 0 >= a.offsetWidth && 0 >= a.offsetHeight || !T.reliableHiddenOffsets() && "none" === (a.style && a.style.display || e.css(a, "display"))
  };
  e.expr.filters.visible = function(a) {
    return !e.expr.filters.hidden(a)
  };
  var Nd = /%20/g,
      Uc = /\[\]$/,
      Lc = /\r?\n/g,
      Od = /^(?:submit|button|image|reset|file)$/i,
      Pd = /^(?:input|select|textarea|keygen)/i;
  e.param = function(a, c) {
    var d, g = [],
        k = function(l, q) {
        q = e.isFunction(q) ? q() : null == q ? "" : q;
        g[g.length] =
        encodeURIComponent(l) + "=" + encodeURIComponent(q)
        };
    if (void 0 === c && (c = e.ajaxSettings && e.ajaxSettings.traditional), e.isArray(a) || a.jquery && !e.isPlainObject(a)) e.each(a, function() {
      k(this.name, this.value)
    });
    else
    for (d in a) Sb(d, a[d], c, k);
    return g.join("&").replace(Nd, "+")
  };
  e.fn.extend({
    serialize: function() {
      return e.param(this.serializeArray())
    },
    serializeArray: function() {
      return this.map(function() {
        var a = e.prop(this, "elements");
        return a ? e.makeArray(a) : this
      }).filter(function() {
        var a = this.type;
        return this.name && !e(this).is(":disabled") && Pd.test(this.nodeName) && !Od.test(a) && (this.checked || !Pb.test(a))
      }).map(function(a, c) {
        var d = e(this).val();
        return null == d ? null : e.isArray(d) ? e.map(d, function(g) {
          return {
            name: c.name,
            value: g.replace(Lc, "\r\n")
          }
        }) : {
          name: c.name,
          value: d.replace(Lc, "\r\n")
        }
      }).get()
    }
  });
  e.ajaxSettings.xhr = void 0 !== b.ActiveXObject ?
  function() {
    var a;
    if (!(a = !this.isLocal && /^(get|post|head|put|delete|options)$/i.test(this.type) && nc())) a: {
      try {
        a = new b.ActiveXObject("Microsoft.XMLHTTP");
        break a
      } catch (c) {}
      a =
      void 0
    }
    return a
  } : nc;
  var Qd = 0,
      Nb = {},
      Ob = e.ajaxSettings.xhr();
  b.ActiveXObject && e(b).on("unload", function() {
    for (var a in Nb) Nb[a](void 0, !0)
  });
  T.cors = !! Ob && "withCredentials" in Ob;
  (Ob = T.ajax = !! Ob) && e.ajaxTransport(function(a) {
    if (!a.crossDomain || T.cors) {
      var c;
      return {
        send: function(d, g) {
          var k, l = a.xhr(),
              q = ++Qd;
          if (l.open(a.type, a.url, a.async, a.username, a.password), a.xhrFields) for (k in a.xhrFields) l[k] = a.xhrFields[k];
          a.mimeType && l.overrideMimeType && l.overrideMimeType(a.mimeType);
          a.crossDomain || d["X-Requested-With"] || (d["X-Requested-With"] = "XMLHttpRequest");
          for (k in d) void 0 !== d[k] && l.setRequestHeader(k, d[k] + "");
          l.send(a.hasContent && a.data || null);
          c = function(v, z) {
            if (c && (z || 4 === l.readyState)) if (delete Nb[q], c = void 0, l.onreadystatechange = e.noop, z) 4 !== l.readyState && l.abort();
            else {
              var G = {};
              var A = l.status;
              "string" == typeof l.responseText && (G.text = l.responseText);
              try {
                var L = l.statusText
              } catch (U) {
                L = ""
              }
              A || !a.isLocal || a.crossDomain ? 1223 === A && (A = 204) : A = G.text ? 200 : 404
            }
            G && g(A, L, G, l.getAllResponseHeaders())
          };
          a.async ? 4 === l.readyState ? setTimeout(c) : l.onreadystatechange = Nb[q] = c : c()
        },
        abort: function() {
          c && c(void 0, !0)
        }
      }
    }
  });
  e.ajaxSetup({
    accepts: {
      script: "text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"
    },
    contents: {
      script: /(?:java|ecma)script/
    },
    converters: {
      "text script": function(a) {
        return e.globalEval(a), a
      }
    }
  });
  e.ajaxPrefilter("script", function(a) {
    void 0 === a.cache && (a.cache = !1);
    a.crossDomain && (a.type = "GET", a.global = !1)
  });
  e.ajaxTransport("script", function(a) {
    if (a.crossDomain) {
      var c, d = Y.head || e("head")[0] || Y.documentElement;
      return {
        send: function(g, k) {
          c = Y.createElement("script");
          c.async = !0;
          a.scriptCharset && (c.charset = a.scriptCharset);
          c.src = a.url;
          c.onload = c.onreadystatechange = function(l, q) {
            (q || !c.readyState || /loaded|complete/.test(c.readyState)) && (c.onload = c.onreadystatechange = null, c.parentNode && c.parentNode.removeChild(c), c = null, q || k(200, "success"))
          };
          d.insertBefore(c, d.firstChild)
        },
        abort: function() {
          c && c.onload(void 0, !0)
        }
      }
    }
  });
  var Mc = [],
      fc = /(=)\?(?=&|$)|\?\?/;
  e.ajaxSetup({
    jsonp: "callback",
    jsonpCallback: function() {
      var a =
      Mc.pop() || e.expando + "_" + dc++;
      return this[a] = !0, a
    }
  });
  e.ajaxPrefilter("json jsonp", function(a, c, d) {
    var g, k, l, q = !1 !== a.jsonp && (fc.test(a.url) ? "url" : "string" == typeof a.data && !(a.contentType || "").indexOf("application/x-www-form-urlencoded") && fc.test(a.data) && "data");
    return q || "jsonp" === a.dataTypes[0] ? (g = a.jsonpCallback = e.isFunction(a.jsonpCallback) ? a.jsonpCallback() : a.jsonpCallback, q ? a[q] = a[q].replace(fc, "$1" + g) : !1 !== a.jsonp && (a.url += (ec.test(a.url) ? "&" : "?") + a.jsonp + "=" + g), a.converters["script json"] =

    function() {
      return l || e.error(g + " was not called"), l[0]
    }, a.dataTypes[0] = "json", k = b[g], b[g] = function() {
      l = arguments
    }, d.always(function() {
      b[g] = k;
      a[g] && (a.jsonpCallback = c.jsonpCallback, Mc.push(g));
      l && e.isFunction(k) && k(l[0]);
      l = k = void 0
    }), "script") : void 0
  });
  e.parseHTML = function(a, c, d) {
    if (!a || "string" != typeof a) return null;
    "boolean" == typeof c && (d = c, c = !1);
    c = c || Y;
    var g = wc.exec(a);
    d = !d && [];
    return g ? [c.createElement(g[1])] : (g = e.buildFragment([a], c, d), d && d.length && e(d).remove(), e.merge([], g.childNodes))
  };
  var Nc =
  e.fn.load;
  e.fn.load = function(a, c, d) {
    if ("string" != typeof a && Nc) return Nc.apply(this, arguments);
    var g, k, l, q = this,
        v = a.indexOf(" ");
    return 0 <= v && (g = e.trim(a.slice(v, a.length)), a = a.slice(0, v)), e.isFunction(c) ? (d = c, c = void 0) : c && "object" == typeof c && (l = "POST"), 0 < q.length && e.ajax({
      url: a,
      type: l,
      dataType: "html",
      data: c
    }).done(function(z) {
      k = arguments;
      q.html(g ? e("<div>").append(e.parseHTML(z)).find(g) : z)
    }).complete(d &&
    function(z, G) {
      q.each(d, k || [z.responseText, G, z])
    }), this
  };
  e.expr.filters.animated = function(a) {
    return e.grep(e.timers, function(c) {
      return a === c.elem
    }).length
  };
  var Oc = b.document.documentElement;
  e.offset = {
    setOffset: function(a, c, d) {
      var g, k, l, q = e.css(a, "position"),
          v = e(a),
          z = {};
      "static" === q && (a.style.position = "relative");
      var G = v.offset();
      var A = e.css(a, "top");
      var L = e.css(a, "left");
      ("absolute" === q || "fixed" === q) && -1 < e.inArray("auto", [A, L]) ? (g = v.position(), l = g.top, k = g.left) : (l = parseFloat(A) || 0, k = parseFloat(L) || 0);
      e.isFunction(c) && (c = c.call(a, d, G));
      null != c.top && (z.top = c.top - G.top + l);
      null != c.left && (z.left = c.left - G.left + k);
      "using" in c ? c.using.call(a, z) : v.css(z)
    }
  };
  e.fn.extend({
    offset: function(a) {
      if (arguments.length) return void 0 === a ? this : this.each(function(q) {
        e.offset.setOffset(this, a, q)
      });
      var c, d, g = {
        top: 0,
        left: 0
      },
          k = this[0],
          l = k && k.ownerDocument;
      if (l) return c = l.documentElement, e.contains(c, k) ? ("undefined" !== typeof k.getBoundingClientRect && (g = k.getBoundingClientRect()), d = oc(l), {
        top: g.top + (d.pageYOffset || c.scrollTop) - (c.clientTop || 0),
        left: g.left + (d.pageXOffset || c.scrollLeft) - (c.clientLeft || 0)
      }) : g
    },
    position: function() {
      if (this[0]) {
        var a, c, d = {
          top: 0,
          left: 0
        },
            g = this[0];
        return "fixed" === e.css(g, "position") ? c = g.getBoundingClientRect() : (a = this.offsetParent(), c = this.offset(), e.nodeName(a[0], "html") || (d = a.offset()), d.top += e.css(a[0], "borderTopWidth", !0), d.left += e.css(a[0], "borderLeftWidth", !0)), {
          top: c.top - d.top - e.css(g, "marginTop", !0),
          left: c.left - d.left - e.css(g, "marginLeft", !0)
        }
      }
    },
    offsetParent: function() {
      return this.map(function() {
        for (var a = this.offsetParent || Oc; a && !e.nodeName(a, "html") && "static" === e.css(a, "position");) a = a.offsetParent;
        return a || Oc
      })
    }
  });
  e.each({
    scrollLeft: "pageXOffset",
    scrollTop: "pageYOffset"
  }, function(a, c) {
    var d = /Y/.test(c);
    e.fn[a] = function(g) {
      return jb(this, function(k, l, q) {
        var v = oc(k);
        return void 0 === q ? v ? c in v ? v[c] : v.document.documentElement[l] : k[l] : void(v ? v.scrollTo(d ? e(v).scrollLeft() : q, d ? q : e(v).scrollTop()) : k[l] = q)
      }, a, g, arguments.length, null)
    }
  });
  e.each(["top", "left"], function(a, c) {
    e.cssHooks[c] = oa(T.pixelPosition, function(d, g) {
      return g ? (g = gb(d, c), Ab.test(g) ? e(d).position()[c] + "px" : g) : void 0
    })
  });
  e.each({
    Height: "height",
    Width: "width"
  }, function(a, c) {
    e.each({
      padding: "inner" + a,
      content: c,
      "": "outer" + a
    }, function(d, g) {
      e.fn[g] = function(k, l) {
        var q = arguments.length && (d || "boolean" != typeof k),
            v = d || (!0 === k || !0 === l ? "margin" : "border");
        return jb(this, function(z, G, A) {
          var L;
          return e.isWindow(z) ? z.document.documentElement["client" + a] : 9 === z.nodeType ? (L = z.documentElement, Math.max(z.body["scroll" + a], L["scroll" + a], z.body["offset" + a], L["offset" + a], L["client" + a])) : void 0 === A ? e.css(z, G, v) : e.style(z, G, A, v)
        }, c, q ? k : void 0, q, null)
      }
    })
  });
  e.fn.size =

  function() {
    return this.length
  };
  e.fn.andSelf = e.fn.addBack;
  "function" == typeof define && define.amd && define("jquery", [], function() {
    return e
  });
  var Rd = b.jQuery,
      Sd = b.$;
  return e.noConflict = function(a) {
    return b.$ === e && (b.$ = Sd), a && b.jQuery === e && (b.jQuery = Rd), e
  }, "undefined" === typeof h && (b.jQuery = b.$ = e), e
});
(function(b, h) {
  function f(E, P, I) {
    var O = y[P.type] || {};
    return null == E ? I || !P.def ? null : P.def : (E = O.floor ? ~~E : parseFloat(E), isNaN(E) ? P.def : O.mod ? (E + O.mod) % O.mod : 0 > E ? 0 : O.max < E ? O.max : E)
  }
  function p(E) {
    var P = u(),
        I = P._rgba = [];
    return E = E.toLowerCase(), F(t, function(O, Z) {
      var da, N = Z.re.exec(E);
      N = N && Z.parse(N);
      var Q = Z.space || "rgba";
      if (N) return da = P[Q](N), P[B[Q].cache] = da[B[Q].cache], I = P._rgba = da._rgba, !1
    }), I.length ? ("0,0,0,0" === I.join() && b.extend(I, R.transparent), P) : R[E]
  }
  function n(E, P, I) {
    return I = (I + 1) % 1, 1 > 6 * I ? E + (P - E) * I * 6 : 1 > 2 * I ? P : 2 > 3 * I ? E + (P - E) * (2 / 3 - I) * 6 : E
  }
  var m = /^([\-+])=\s*(\d+\.?\d*)/,
      t = [{
      re: /rgba?\(\s*(\d{1,3})\s*,\s*(\d{1,3})\s*,\s*(\d{1,3})\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
      parse: function(E) {
        return [E[1], E[2], E[3], E[4]]
      }
    }, {
      re: /rgba?\(\s*(\d+(?:\.\d+)?)%\s*,\s*(\d+(?:\.\d+)?)%\s*,\s*(\d+(?:\.\d+)?)%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
      parse: function(E) {
        return [2.55 * E[1], 2.55 * E[2], 2.55 * E[3], E[4]]
      }
    }, {
      re: /#([a-f0-9]{2})([a-f0-9]{2})([a-f0-9]{2})/,
      parse: function(E) {
        return [parseInt(E[1], 16), parseInt(E[2], 16), parseInt(E[3], 16)]
      }
    }, {
      re: /#([a-f0-9])([a-f0-9])([a-f0-9])/,
      parse: function(E) {
        return [parseInt(E[1] + E[1], 16), parseInt(E[2] + E[2], 16), parseInt(E[3] + E[3], 16)]
      }
    }, {
      re: /hsla?\(\s*(\d+(?:\.\d+)?)\s*,\s*(\d+(?:\.\d+)?)%\s*,\s*(\d+(?:\.\d+)?)%\s*(?:,\s*(\d?(?:\.\d+)?)\s*)?\)/,
      space: "hsla",
      parse: function(E) {
        return [E[1], E[2] / 100, E[3] / 100, E[4]]
      }
    }],
      u = b.Color = function(E, P, I, O) {
      return new b.Color.fn.parse(E, P, I, O)
      },
      B = {
      rgba: {
        props: {
          red: {
            idx: 0,
            type: "byte"
          },
          green: {
            idx: 1,
            type: "byte"
          },
          blue: {
            idx: 2,
            type: "byte"
          }
        }
      },
      hsla: {
        props: {
          hue: {
            idx: 0,
            type: "degrees"
          },
          saturation: {
            idx: 1,
            type: "percent"
          },
          lightness: {
            idx: 2,
            type: "percent"
          }
        }
      }
      },
      y = {
      "byte": {
        floor: !0,
        max: 255
      },
      percent: {
        max: 1
      },
      degrees: {
        mod: 360,
        floor: !0
      }
      },
      H = u.support = {},
      D = b("<p>")[0],
      F = b.each;
  D.style.cssText = "background-color:rgba(1,1,1,.5)";
  H.rgba = -1 < D.style.backgroundColor.indexOf("rgba");
  F(B, function(E, P) {
    P.cache = "_" + E;
    P.props.alpha = {
      idx: 3,
      type: "percent",
      def: 1
    }
  });
  u.fn = b.extend(u.prototype, {
    parse: function(E, P, I, O) {
      if (E === h) return this._rgba = [null, null, null, null], this;
      if (E.jquery || E.nodeType) E =
      b(E).css(P), P = h;
      var Z = this,
          da = b.type(E),
          N = this._rgba = [];
      P !== h && (E = [E, P, I, O], da = "array");
      if ("string" === da) return this.parse(p(E) || R._default);
      if ("array" === da) return F(B.rgba.props, function(Q, S) {
        N[S.idx] = f(E[S.idx], S)
      }), this;
      if ("object" === da) return E instanceof u ? F(B, function(Q, S) {
        E[S.cache] && (Z[S.cache] = E[S.cache].slice())
      }) : F(B, function(Q, S) {
        var W = S.cache;
        F(S.props, function(aa, oa) {
          if (!Z[W] && S.to) {
            if ("alpha" === aa || null == E[aa]) return;
            Z[W] = S.to(Z._rgba)
          }
          Z[W][oa.idx] = f(E[aa], oa, !0)
        });
        Z[W] && 0 > b.inArray(null, Z[W].slice(0, 3)) && (Z[W][3] = 1, S.from && (Z._rgba = S.from(Z[W])))
      }), this
    },
    is: function(E) {
      var P = u(E),
          I = !0,
          O = this;
      return F(B, function(Z, da) {
        var N, Q = P[da.cache];
        return Q && (N = O[da.cache] || da.to && da.to(O._rgba) || [], F(da.props, function(S, W) {
          if (null != Q[W.idx]) return I = Q[W.idx] === N[W.idx], I
        })), I
      }), I
    },
    _space: function() {
      var E = [],
          P = this;
      return F(B, function(I, O) {
        P[O.cache] && E.push(I)
      }), E.pop()
    },
    transition: function(E, P) {
      var I = u(E),
          O = I._space(),
          Z = B[O],
          da = 0 === this.alpha() ? u("transparent") : this,
          N = da[Z.cache] || Z.to(da._rgba),
          Q = N.slice();
      return I = I[Z.cache], F(Z.props, function(S, W) {
        var aa = W.idx,
            oa = N[aa],
            na = I[aa],
            wa = y[W.type] || {};
        null !== na && (null === oa ? Q[aa] = na : (wa.mod && (na - oa > wa.mod / 2 ? oa += wa.mod : oa - na > wa.mod / 2 && (oa -= wa.mod)), Q[aa] = f((na - oa) * P + oa, W)))
      }), this[O](Q)
    },
    blend: function(E) {
      if (1 === this._rgba[3]) return this;
      var P = this._rgba.slice(),
          I = P.pop(),
          O = u(E)._rgba;
      return u(b.map(P, function(Z, da) {
        return (1 - I) * O[da] + I * Z
      }))
    },
    toRgbaString: function() {
      var E = "rgba(",
          P = b.map(this._rgba, function(I, O) {
          return null == I ? 2 < O ? 1 : 0 : I
        });
      return 1 === P[3] && (P.pop(), E = "rgb("), E + P.join() + ")"
    },
    toHslaString: function() {
      var E = "hsla(",
          P = b.map(this.hsla(), function(I, O) {
          return null == I && (I = 2 < O ? 1 : 0), O && 3 > O && (I = Math.round(100 * I) + "%"), I
        });
      return 1 === P[3] && (P.pop(), E = "hsl("), E + P.join() + ")"
    },
    toHexString: function(E) {
      var P = this._rgba.slice(),
          I = P.pop();
      return E && P.push(~~ (255 * I)), "#" + b.map(P, function(O) {
        return O = (O || 0).toString(16), 1 === O.length ? "0" + O : O
      }).join("")
    },
    toString: function() {
      return 0 === this._rgba[3] ? "transparent" : this.toRgbaString()
    }
  });
  u.fn.parse.prototype =
  u.fn;
  B.hsla.to = function(E) {
    if (null == E[0] || null == E[1] || null == E[2]) return [null, null, null, E[3]];
    var P = E[0] / 255,
        I = E[1] / 255,
        O = E[2] / 255;
    E = E[3];
    var Z = Math.max(P, I, O),
        da = Math.min(P, I, O),
        N = Z - da,
        Q = Z + da,
        S = .5 * Q,
        W, aa;
    return da === Z ? W = 0 : P === Z ? W = 60 * (I - O) / N + 360 : I === Z ? W = 60 * (O - P) / N + 120 : W = 60 * (P - I) / N + 240, 0 === N ? aa = 0 : .5 >= S ? aa = N / Q : aa = N / (2 - Q), [Math.round(W) % 360, aa, S, null == E ? 1 : E]
  };
  B.hsla.from = function(E) {
    if (null == E[0] || null == E[1] || null == E[2]) return [null, null, null, E[3]];
    var P = E[0] / 360,
        I = E[1],
        O = E[2];
    E = E[3];
    I = .5 >= O ? O * (1 + I) : O + I - O * I;
    O = 2 * O - I;
    return [Math.round(255 * n(O, I, P + 1 / 3)), Math.round(255 * n(O, I, P)), Math.round(255 * n(O, I, P - 1 / 3)), E]
  };
  F(B, function(E, P) {
    var I = P.props,
        O = P.cache,
        Z = P.to,
        da = P.from;
    u.fn[E] = function(N) {
      Z && !this[O] && (this[O] = Z(this._rgba));
      if (N === h) return this[O].slice();
      var Q, S = b.type(N),
          W = "array" === S || "object" === S ? N : arguments,
          aa = this[O].slice();
      return F(I, function(oa, na) {
        var wa = W["object" === S ? oa : na.idx];
        null == wa && (wa = aa[na.idx]);
        aa[na.idx] = f(wa, na)
      }), da ? (Q = u(da(aa)), Q[O] = aa, Q) : u(aa)
    };
    F(I, function(N, Q) {
      u.fn[N] || (u.fn[N] = function(S) {
        var W = b.type(S),
            aa = "alpha" === N ? this._hsla ? "hsla" : "rgba" : E,
            oa = this[aa](),
            na = oa[Q.idx],
            wa;
        return "undefined" === W ? na : ("function" === W && (S = S.call(this, na), W = b.type(S)), null == S && Q.empty ? this : ("string" === W && (wa = m.exec(S), wa && (S = na + parseFloat(wa[2]) * ("+" === wa[1] ? 1 : -1))), oa[Q.idx] = S, this[aa](oa)))
      })
    })
  });
  u.hook = function(E) {
    E = E.split(" ");
    F(E, function(P, I) {
      b.cssHooks[I] = {
        set: function(O, Z) {
          var da, N = "";
          if ("transparent" !== Z && ("string" !== b.type(Z) || (da = p(Z)))) {
            Z = u(da || Z);
            if (!H.rgba && 1 !== Z._rgba[3]) {
              for (da = "backgroundColor" === I ? O.parentNode : O;
              ("" === N || "transparent" === N) && da && da.style;) try {
                N = b.css(da, "backgroundColor"), da = da.parentNode
              } catch (Q) {}
              Z = Z.blend(N && "transparent" !== N ? N : "_default")
            }
            Z = Z.toRgbaString()
          }
          try {
            O.style[I] = Z
          } catch (Q) {}
        }
      };
      b.fx.step[I] = function(O) {
        O.colorInit || (O.start = u(O.elem, I), O.end = u(O.end), O.colorInit = !0);
        b.cssHooks[I].set(O.elem, O.start.transition(O.end, O.pos))
      }
    })
  };
  u.hook("backgroundColor borderBottomColor borderLeftColor borderRightColor borderTopColor color columnRuleColor outlineColor textDecorationColor textEmphasisColor");
  b.cssHooks.borderColor = {
    expand: function(E) {
      var P = {};
      return F(["Top", "Right", "Bottom", "Left"], function(I, O) {
        P["border" + O + "Color"] = E
      }), P
    }
  };
  var R = b.Color.names = {
    aqua: "#00ffff",
    black: "#000000",
    blue: "#0000ff",
    fuchsia: "#ff00ff",
    gray: "#808080",
    green: "#008000",
    lime: "#00ff00",
    maroon: "#800000",
    navy: "#000080",
    olive: "#808000",
    purple: "#800080",
    red: "#ff0000",
    silver: "#c0c0c0",
    teal: "#008080",
    white: "#ffffff",
    yellow: "#ffff00",
    transparent: [null, null, null, 0],
    _default: "#ffffff"
  }
})(jQuery);
var ion = ion || {};
(function(b) {
  var h = function(D) {
    D && console && (console.warn && "function" === typeof console.warn ? console.warn(D) : console.log && "function" === typeof console.log && console.log(D))
  };
  if (b.sound) h("ion.sound already exists!");
  else if ("function" !== typeof Audio && "object" !== typeof Audio) {
    var f = function() {
      h("HTML5 Audio is not supported in this browser")
    };
    b.sound = function() {};
    b.sound.play = f;
    b.sound.stop = f;
    b.sound.destroy = f;
    f()
  } else {
    var p, n = /iPad|iPhone/.test(navigator.appVersion),
        m, t = {},
        u = {},
        B, y, H;
    n ? (p = function(D) {
      this.name =
      D.name;
      this.paused = this.loop = !1;
      this.callback = this.sound = null
    }, p.prototype = {
      init: function() {
        this.sound = m
      },
      play: function(D) {
        D || (D = {});
        D.loop ? this.paused ? this._playLoop(this.loop + 1) : this._playLoop(D.loop) : (this.loop = !1, this._play());
        D.onEnded && "function" === typeof D.onEnded && (this.callback = D.onEnded)
      },
      _play: function() {
        if (this.paused) this.paused = !1;
        else
        try {
          this.sound.currentTime = 0
        } catch (D) {}
        this.sound.removeEventListener("ended");
        this.sound.addEventListener("ended", this._ended.bind(this), !1);
        this.sound.src =
        t.path + this.name + y;
        this.sound.load();
        this.sound.play()
      }
    }) : (p = function(D) {
      this.name = D.name;
      this.volume = t.volume || .5;
      this.preload = t.preload ? "auto" : "none";
      this.paused = this.loop = !1;
      this.callback = this.sound = null;
      "volume" in D && (this.volume = +D.volume);
      "preload" in D && (this.preload = D.preload ? "auto" : "none")
    }, p.prototype = {
      init: function() {
        this.sound = new Audio;
        this.sound.src = t.path + this.name + y;
        this.sound.load();
        this.sound.preload = this.preload;
        this.sound.volume = this.volume;
        this.sound.addEventListener("ended", this._ended.bind(this), !1)
      },
      play: function(D) {
        D || (D = {});
        if (D.volume || 0 === D.volume) this.volume = +D.volume, this.sound.volume = this.volume;
        D.loop ? this.paused ? this._playLoop(this.loop + 1) : this._playLoop(D.loop) : (this.loop = !1, this._play());
        D.onEnded && "function" === typeof D.onEnded && (this.callback = D.onEnded)
      },
      _play: function() {
        if (this.paused) this.paused = !1;
        else
        try {
          this.sound.currentTime = 0
        } catch (D) {}
        this.sound.play()
      }
    });
    p.prototype._playLoop = function(D) {
      "boolean" === typeof D ? (this.loop = 9999999, this._play()) : "number" === typeof D && (this.loop =
      D - 1, this._play())
    };
    p.prototype._ended = function() {
      0 < this.loop && (--this.loop, this._play());
      this.callback && this.callback(this.name)
    };
    p.prototype.pause = function() {
      this.paused = !0;
      this.sound.pause()
    };
    p.prototype.stop = function() {
      this.loop = !1;
      this.sound.pause();
      try {
        this.sound.currentTime = 0
      } catch (D) {}
    };
    p.prototype.destroy = function() {
      this.stop();
      this.sound.removeEventListener("ended", this._ended.bind(this), !1);
      this.sound.src = "";
      this.sound = null
    };
    b.sound = function(D) {
      t = JSON.parse(JSON.stringify(D));
      t.path = t.path || "";
      t.volume = t.volume || .5;
      t.preload = t.preload || !1;
      t.mix = t.mix || !0;
      if (B = t.sounds.length) {
        m = new Audio;
        D = m.canPlayType("audio/mpeg");
        var F = m.canPlayType("audio/ogg"),
            R = m.canPlayType('audio/mp4; codecs="mp4a.40.2"');
        n ? "probably" === D ? y = ".mp3" : "probably" === R ? y = ".aac" : "maybe" === D ? y = ".mp3" : "maybe" === R && (y = ".aac") : y = "probably" === D ? ".mp3" : "probably" === F ? ".ogg" : "maybe" === D ? ".mp3" : "maybe" === F ? ".ogg" : ".wav";
        for (H = 0; H < B; H++) D = t.sounds[H], u[D.name] = new p(D), u[D.name].init()
      } else h("No sound-files provided!")
    };
    b.sound.version = "2.1.3";
    b.sound.play = function(D, F) {
      u[D] && u[D].play(F)
    };
    b.sound.pause = function(D) {
      if (D && u[D]) u[D].pause();
      else
      for (H in u) u.hasOwnProperty(H) && u[H] && u[H].pause()
    };
    b.sound.stop = function(D) {
      if (D && u[D]) u[D].stop();
      else
      for (H in u) u.hasOwnProperty(H) && u[H] && u[H].stop()
    };
    b.sound.destroy = function(D) {
      if (D && u[D]) u[D].destroy(), u[D] = null;
      else
      for (H in u) u.hasOwnProperty(H) && u[H] && (u[H].destroy(), u[H] = null)
    }
  }
})(ion);
Array.prototype.indexOf || (Array.prototype.indexOf = function(b, h) {
  for (var f = h || 0, p = this.length; f < p; f++) if (this[f] === b) return f;
  return -1
});
var com = com || {};
com.livescore = com.livescore || {};

function supports_html5_storage() {
  try {
    return "localStorage" in window && null !== window.localStorage
  } catch (b) {
    return !1
  }
}

function areCookiesEnabled() {
  var b = navigator.cookieEnabled;
  if (!1 === b) return !1;
  if (!document.cookie && null === b) if (document.cookie = "testcookie=1", document.cookie) document.cookie = "testcookie=; expires=" + (new Date(0)).toUTCString();
  else
  return !1;
  return !0
}
window.fbAsyncInit = function() {
  FB.init({
    appId: "326266657463591",
    xfbml: !0
  })
};
com.livescore.extend = function() {
  var b = function() {};
  return function(h, f) {
    b.prototype = f.prototype;
    h.prototype = new b;
    h.prototype.constructor = h;
    h.parent = f.prototype;
    f.prototype.constructor == Object.prototype.constructor && (f.prototype.constructor = f)
  }
}();
supports_html5_storage() ? document.write('<style type="text/css">.buttons ul.buttons {display: none;} .lsd {display: none;}</style>') : document.write('<style type="text/css">.lse {display: none;}</style>');
com.livescore.Stage = function(b, h, f) {
  this.id = b.Sid;
  this.providerId = b.Pid;
  this.name = b.Snm;
  this.code = b.Scd;
  this.countryName = b.Cnm;
  this.countryCode = b.Ccd;
  this.sportCode = h;
  this.leagueTable = this.loadLeagueTable(b.LeagueTable);
  this.matches = this.loadMatches(b.Events, f)
};
com.livescore.Stage.prototype.loadLeagueTable = function(b) {
  if (b && 0 !== b.length) {
    var h = [],
        f;
    for (f = 0; f < b.length; f++) h.push(new com.livescore.Team(b[f]));
    return h
  }
  return null
};
com.livescore.Stage.prototype.loadMatches = function(b, h) {
  if (b && 0 !== b.length) {
    var f = [],
        p = [],
        n, m = null;
    for (n = 0; n < b.length; n++) {
      var t = com.livescore.Match.init(this.sportCode, b[n], h);
      null !== t && t.extended && (null === m || t.sameDayAs(m) || (f.push(p), p = []), p.push(t), m = t)
    }
    0 < p.length && f.push(p);
    return f
  }
  return null
};
com.livescore.Stage.stageList = function(b, h, f) {
  var p = [],
      n;
  if (void 0 !== b) for (n = 0; n < b.length; n++) {
    var m = new com.livescore.Stage(b[n], h, f);
    p.push(m)
  }
  return p
};
com.livescore.SimpleTeam = function(b) {
  this.id = b.ID;
  this.name = b.Nm;
  this.code = void 0 === this.name || null === this.name ? null : this.name.toLowerCase().replace(/[^a-zA-Z0-9]+/g, "-")
};
com.livescore.SimpleTeam.teamList = function(b) {
  var h = [],
      f;
  if (void 0 !== b) for (f = 0; f < b.length; f++) {
    var p = new com.livescore.SimpleTeam(b[f]);
    h.push(p)
  }
  return h
};
com.livescore.Team = function(b) {
  this.id = b.Tid;
  this.name = b.Tnm;
  this.points = b.pts;
  this.matches = b.pld;
  this.wins = b.win;
  this.draws = b.drw;
  this.losses = b.lst;
  this.goalsScored = b.gf;
  this.goalsAgainst = b.ga;
  this.goalDiff = b.gd;
  this.rank = b.rnk;
  this.inProgressVal = b.Ipr;
  this.winsOverTime = b.wot;
  this.winsAfterPenalties = b.wap;
  this.lossesOverTime = b.lot;
  this.lossesAfterPenalties = b.lap;
  this.winsRegularTime = b.wreg;
  this.lossesRegularTime = b.lreg
};
com.livescore.Incident = function(b, h, f, p) {
  this.minute = b;
  this.playerName = h;
  this.incidentType = f;
  this.teamNumber = p
};
com.livescore.Incident.incidentList = function(b) {
  var h = [],
      f;
  if (void 0 !== b) for (f = 0; f < b.length; f++) {
    var p = b[f];
    if (void 0 !== p.Pn1 || void 0 !== p.IT1) {
      var n = new com.livescore.Incident(p.Min, p.Pn1, p.IT1, 1);
      h.push(n)
    }
    if (void 0 !== p.Pn2 || void 0 !== p.IT2) n = new com.livescore.Incident(p.Min, p.Pn2, p.IT2, 2), h.push(n)
  }
  return h
};
com.livescore.Match = function(b, h, f) {
  this.providerId = h.Pid;
  this.matchId = h.Eid;
  this.sportCode = b;
  this.scheduledStart = com.livescore.Match.localScheduledStartFromData(h.Esd, f);
  this.duration = h.Exd;
  this.id = this.sportCode + "-" + this.providerId + "-" + this.matchId;
  this.extended = !1;
  com.livescore.Match.isExtendedData(h) && this.extend(h, f);
  this.scheduledStartDate = com.livescore.Match.dateFromTimestamp(this.scheduledStart)
};
com.livescore.Match.prototype.extend = function(b, h) {
  this.extended = !0;
  this.overallStatusId = b.Epr;
  this.overallStatus = b.Eps;
  this.statusId = b.Esid;
  void 0 !== b.T1 && (this.homeTeam = com.livescore.SimpleTeam.teamList(b.T1));
  void 0 !== b.T2 && (this.awayTeam = com.livescore.SimpleTeam.teamList(b.T2));
  this.scheduledStart = com.livescore.Match.localScheduledStartFromData(b.Esd, h);
  this.homeScore = b.Tr1;
  this.awayScore = b.Tr2;
  this.homePenaltyScore = b.Trp1;
  this.awayPenaltyScore = b.Trp2;
  this.winner = b.Ewt;
  this.roundMatchCount = b.Bo;
  this.roundMatchPos = b.BoN;
  this.roundMatchScores = b.BoSc;
  this.incidentCount = b.IncsX;
  this.lineupCount = b.LuX;
  this.substitutionCount = b.SubsX;
  this.statisticCount = b.StatX;
  this.commentaryCount = b.ComX;
  this.shouldShowScore = 0 != this.overallStatusId && 4 != this.overallStatusId && (3 != this.overallStatusId || void 0 !== this.homeScore && 0 != this.homeScore.length && void 0 !== this.awayScore && 0 != this.awayScore.length);
  this.shouldShowDetails = !1
};
com.livescore.Match.prototype.sameDayAs = function(b) {
  return void 0 !== b.scheduledStart && Math.floor(b.scheduledStart / 1E6) == Math.floor(this.scheduledStart / 1E6)
};
com.livescore.Match.prototype.getScheduledStartWithDuration = function(b) {
  return com.livescore.Match.addDurationToScheduledStart(this.scheduledStart, this.duration, b)
};
com.livescore.Match.localScheduledStartFromData = function(b, h) {
  return h ? com.livescore.Match.timestampFromDate(com.livescore.Match.dateFromTimestamp(b, h)) : b
};
com.livescore.Match.dateFromTimestamp = function(b, h) {
  if (isNaN(parseInt(b, 10))) return null;
  var f = Math.floor(b / 1E10);
  var p = Math.floor(b % 1E10 / 1E8) - 1;
  var n = Math.floor(b % 1E8 / 1E6);
  var m = Math.floor(b % 1E6 / 1E4);
  var t = Math.floor(b % 1E4 / 100);
  var u = b % 100;
  var B = new Date;
  !0 === h ? (B.setUTCFullYear(f), B.setUTCMonth(p), B.setUTCDate(n), B.setUTCHours(m), B.setUTCMinutes(t), B.setUTCSeconds(u), B.setUTCMilliseconds(0)) : (B.setFullYear(f), B.setMonth(p), B.setDate(n), B.setHours(m), B.setMinutes(t), B.setSeconds(u), B.setMilliseconds(0));
  return B
};
com.livescore.Match.addDurationToScheduledStart = function(b, h, f) {
  b = parseInt(b, 10);
  isNaN(b) && (b = 0);
  return void 0 !== h && 1 < h ? (f = com.livescore.Match.dateFromTimestamp(b, f), f.setUTCHours(f.getUTCHours() + 24 * h), com.livescore.Match.timestampFromDate(f, !0)) : !0 !== f ? com.livescore.Match.timestampFromDate(com.livescore.Match.dateFromTimestamp(b, f), !0) : b
};
com.livescore.Match.timestampFromDate = function(b, h) {
  return h ? 1E10 * b.getUTCFullYear() + 1E8 * (b.getUTCMonth() + 1) + 1E6 * b.getUTCDate() + 1E4 * b.getUTCHours() + 100 * b.getUTCMinutes() + b.getUTCSeconds() : 1E10 * b.getFullYear() + 1E8 * (b.getMonth() + 1) + 1E6 * b.getDate() + 1E4 * b.getHours() + 100 * b.getMinutes() + b.getSeconds()
};
com.livescore.Match.init = function(b, h, f) {
  if (void 0 === h || null === h) return null;
  switch (b) {
  case "soccer":
    return new com.livescore.SoccerMatch(b, h, f);
  case "hockey":
    return new com.livescore.HockeyMatch(b, h, f);
  case "basketball":
    return new com.livescore.BasketballMatch(b, h, f);
  case "tennis":
    return new com.livescore.TennisMatch(b, h, f);
  case "cricket":
    return new com.livescore.CricketMatch(b, h, f);
  default:
    return new com.livescore.Match(b, h, f)
  }
};
com.livescore.Match.isExtendedData = function(b) {
  return void 0 !== b && void 0 !== b.T1 && void 0 !== b.T2 && void 0 !== b.Epr && void 0 !== b.Eps && void 0 !== b.Esid && void 0 !== b.Esd
};
com.livescore.Match.fromNotification = function(b, h) {
  return void 0 === b || null === b || void 0 === b.providerId || void 0 === b.matchId || void 0 === h ? null : com.livescore.Match.init(h, {
    Pid: b.providerId,
    Eid: b.matchId,
    Eds: b.scheduledStart
  })
};
com.livescore.SoccerMatch = function(b, h, f) {
  com.livescore.SoccerMatch.parent.constructor.call(this, b, h, f);
  this.extended && this.extend(h, f)
};
com.livescore.extend(com.livescore.SoccerMatch, com.livescore.Match);
com.livescore.SoccerMatch.prototype.extend = function(b, h) {
  this.extended || com.livescore.SoccerMatch.parent.extend.call(this, b, h);
  this.extended && (this.homeHalfTimeScore = b.Trh1, this.awayHalfTimeScore = b.Trh2, this.homeOrdinaryTimeScore = b.Tr1OR, this.awayOrdinaryTimeScore = b.Tr2OR, this.homeExtraTimeScore = b.Tr1ET, this.awayExtraTimeScore = b.Tr2ET, this.shouldShowDetails = 0 < this.incidentCount || 0 < this.substitutionCount || 0 < this.lineupCount || 1 < this.roundMatchPos || void 0 !== this.homeHalfTimeScore && 0 < this.homeHalfTimeScore.length && "0" != this.homeHalfTimeScore || void 0 !== this.awayHalfTimeScore && 0 < this.awayHalfTimeScore.length && "0" != this.awayHalfTimeScore)
};
com.livescore.HockeyMatch = function(b, h, f) {
  com.livescore.HockeyMatch.parent.constructor.call(this, b, h, f);
  this.extended && this.extend(h, f)
};
com.livescore.extend(com.livescore.HockeyMatch, com.livescore.Match);
com.livescore.HockeyMatch.prototype.extend = function(b, h) {
  this.extended || com.livescore.HockeyMatch.parent.extend.call(this, b, h);
  this.extended && (this.homePeriod1Score = b.Tr1Pe1, this.awayPeriod1Score = b.Tr2Pe1, this.homePeriod2Score = b.Tr1Pe2, this.awayPeriod2Score = b.Tr2Pe2, this.homePeriod3Score = b.Tr1Pe3, this.awayPeriod3Score = b.Tr2Pe3, this.homeExtraTimeScore = b.Tr1OT, this.awayExtraTimeScore = b.Tr2OT, this.shouldShowDetails = this.shouldShowScore && (0 < this.incidentCount || 0 < this.substitutionCount || 1 < this.roundMatchPos))
};
com.livescore.BasketballMatch = function(b, h, f) {
  com.livescore.BasketballMatch.parent.constructor.call(this, b, h, f);
  this.extended && this.extend(h, f)
};
com.livescore.extend(com.livescore.BasketballMatch, com.livescore.Match);
com.livescore.BasketballMatch.prototype.extend = function(b, h) {
  this.extended || com.livescore.BasketballMatch.parent.extend.call(this, b, h);
  this.extended && (this.homePeriod1Score = b.Tr1Pe1, this.awayPeriod1Score = b.Tr2Pe1, this.homePeriod2Score = b.Tr1Pe2, this.awayPeriod2Score = b.Tr2Pe2, this.homePeriod3Score = b.Tr1Pe3, this.awayPeriod3Score = b.Tr2Pe3, this.homeQuarter1Score = b.Tr1Q1, this.awayQuarter1Score = b.Tr2Q1, this.homeQuarter2Score = b.Tr1Q2, this.awayQuarter2Score = b.Tr2Q2, this.homeQuarter3Score = b.Tr1Q3, this.awayQuarter3Score =
  b.Tr2Q3, this.homeQuarter4Score = b.Tr1Q4, this.awayQuarter4Score = b.Tr2Q4, this.homeExtraTimeScore = b.Tr1OT, this.awayExtraTimeScore = b.Tr2OT)
};
com.livescore.TennisMatch = function(b, h, f) {
  com.livescore.TennisMatch.parent.constructor.call(this, b, h, f);
  this.extended && this.extend(h, f)
};
com.livescore.extend(com.livescore.TennisMatch, com.livescore.Match);
com.livescore.TennisMatch.prototype.extend = function(b, h) {
  this.extended || com.livescore.TennisMatch.parent.extend.call(this, b, h);
  this.extended && (this.homeSet1Score = b.Tr1S1, this.awaySet1Score = b.Tr2S1, this.homeSet1TiebreakScore = b.Tr1S1T, this.awaySet1TiebreakScore = b.Tr2S1T, this.homeSet2Score = b.Tr1S2, this.awaySet2Score = b.Tr2S2, this.homeSet2TiebreakScore = b.Tr1S2T, this.awaySet2TiebreakScore = b.Tr2S2T, this.homeSet3Score = b.Tr1S3, this.awaySet3Score = b.Tr2S3, this.homeSet3TiebreakScore = b.Tr1S3T, this.awaySet3TiebreakScore =
  b.Tr2S3T, this.homeSet4Score = b.Tr1S4, this.awaySet4Score = b.Tr2S4, this.homeSet4TiebreakScore = b.Tr1S4T, this.awaySet4TiebreakScore = b.Tr2S4T, this.homeSet5Score = b.Tr1S5, this.awaySet5Score = b.Tr2S5, this.homeSet5TiebreakScore = b.Tr1S5T, this.awaySet5TiebreakScore = b.Tr2S5T, this.homeGameScore = b.Tr1G, this.awayGameScore = b.Tr2G, this.serves = b.Esrv)
};
com.livescore.CricketMatch = function(b, h, f) {
  com.livescore.CricketMatch.parent.constructor.call(this, b, h, f);
  this.extended && this.extend(h, f)
};
com.livescore.extend(com.livescore.CricketMatch, com.livescore.Match);
com.livescore.CricketMatch.prototype.extend = function(b, h) {
  this.extended || com.livescore.CricketMatch.parent.extend.call(this, b, h);
  this.extended && (this.overallStatusLong = b.EpsL, this.duration = b.Exd, this.matchTypeDesc = b.EtTx, this.lastComment = b.ECo, this.matchPhaseDesc = b.ErnInf, this.batting = b.Ebat, this.inningCount = b.SDInnX, this.wicketCount = b.SDFowX, this.homeInning1Overs = b.Tr1CO1, this.awayInning1Overs = b.Tr2CO1, this.homeInning1Runs = b.Tr1C1, this.awayInning1Runs = b.Tr2C1, this.homeInning1Wickets = b.Tr1CW1, this.awayInning1Wickets =
  b.Tr2CW1, this.homeInning1DeclaredClosed = b.Tr1CD1, this.awayInning1DeclaredClosed = b.Tr2CD1, this.homeInning2Overs = b.Tr1CO2, this.awayInning2Overs = b.Tr2CO2, this.homeInning2Runs = b.Tr1C2, this.awayInning2Runs = b.Tr2C2, this.homeInning2Wickets = b.Tr1CW2, this.awayInning2Wickets = b.Tr2CW2, this.homeInning2DeclaredClosed = b.Tr1CD2, this.awayInning2DeclaredClosed = b.Tr2CD2)
};
com.livescore.Notification = function(b, h, f, p, n, m, t) {
  this.type = b;
  this.sportId = f.Spid;
  this.stageId = f.Sid;
  this.providerId = f.Pid;
  this.matchId = f.Eid;
  this.overallStatusId = f.Epr;
  this.overallStatus = f.Eps;
  this.scheduledStart = f.Esd;
  void 0 !== f.T1 && (this.homeTeam = com.livescore.SimpleTeam.teamList(f.T1));
  void 0 !== f.T2 && (this.awayTeam = com.livescore.SimpleTeam.teamList(f.T2));
  this.homeScore = f.Tr1;
  this.awayScore = f.Tr2;
  this.homePenaltyScore = f.Trp1;
  this.awayPenaltyScore = f.Trp2;
  this.status = f.Esid;
  this.scorerPosition =
  f.Tn;
  this.incident = p;
  this.timestamp = h;
  this.winner = f.Ewt;
  this.category = n;
  this.stage = m;
  this.teamCode = t;
  this.compositeMatchId = this.providerId + "-" + this.matchId;
  this.compositeId = this.compositeMatchId + "-" + this.timestamp;
  this.hasDetails = void 0 !== f.LuX && 0 < f.LuX || void 0 !== f.ComX && 0 < f.ComX || void 0 !== f.IncsX && 0 < f.IncsX || void 0 !== f.StatX && 0 < f.StatX || void 0 !== f.SDInnX && 0 < f.SDInnX || void 0 !== f.SDFowX && 0 < f.SDFowX || void 0 !== f.SubsX && 0 < f.SubsX
};
com.livescore.Notification.prototype.isCorrection = function() {
  var b;
  if (void 0 === this._isCorrection && (this._isCorrection = !1, "sc" == this.type)) {
    var h = void 0 !== this.scorerPosition && null !== this.scorerPosition ? this.scorerPosition : [];
    if (0 < h.length) for (b = 0; b < h.length; b++) if (0 > h[b]) {
      this._isCorrection = !0;
      break
    }
    if (!this._isCorrection && (h = void 0 !== this.setScorerPosition && null !== this.setScorerPosition ? this.setScorerPosition : [], 0 < h.length)) for (b = 0; b < h.length; b++) if (0 > h[b]) {
      this._isCorrection = !0;
      break
    }
  }
  return this._isCorrection
};
com.livescore.TennisNotification = function(b, h, f, p, n, m, t) {
  com.livescore.TennisNotification.parent.constructor.call(this, b, h, f, p, n, m, t);
  this.homeSetScore = f.Tr1S;
  this.awaySetScore = f.Tr2S;
  this.homeTiebreakScore = f.Tr1ST;
  this.awayTiebreakScore = f.Tr2ST;
  this.setScorerPosition = f.TnS;
  this.serves = f.Esrv
};
com.livescore.extend(com.livescore.TennisNotification, com.livescore.Notification);
com.livescore.CricketNotification = function(b, h, f, p, n, m, t) {
  com.livescore.CricketNotification.parent.constructor.call(this, b, h, f, p, n, m, t);
  this.homeScore1 = f.Tr1C1;
  this.awayScore1 = f.Tr2C1;
  this.homeScore2 = f.Tr1C2;
  this.awayScore2 = f.Tr2C2;
  this.homeWicketScore1 = f.Tr1CW1;
  this.awayWicketScore1 = f.Tr2CW1;
  this.homeWicketScore2 = f.Tr1CW2;
  this.awayWicketScore2 = f.Tr2CW2;
  this.wicketScorerPos = f.TnW;
  this.lastComment = f.ECo
};
com.livescore.extend(com.livescore.CricketNotification, com.livescore.Notification);
com.livescore.Notification.build = function(b, h, f, p, n, m, t, u) {
  switch (b) {
  case 2:
    b = new com.livescore.TennisNotification(h, f, p, n, m, t, u);
    break;
  case 73:
    b = new com.livescore.CricketNotification(h, f, p, n, m, t, u);
    break;
  default:
    b = new com.livescore.Notification(h, f, p, n, m, t, u)
  }
  return b
};
com.livescore.Notification.notificationList = function(b) {
  var h = [],
      f, p;
  if (void 0 !== b) for (f = 0; f < b.length; f++) {
    var n = void 0;
    var m = b[f];
    var t = void 0 === m.d || void 0 === m.d.Spid ? -1 : m.d.Spid;
    if (void 0 !== m.ac && void 0 !== m.d && void 0 !== m.Tim) {
      var u = com.livescore.Incident.incidentList(m.d.Incs);
      if (void 0 === u || 0 == u.length) n = com.livescore.Notification.build(t, m.ac, m.Tim, m.d, n, m.Ccd, m.Scd, m.Tcd), h.push(n);
      else
      for (p = 0; p < u.length; p++) n = u[p], n = com.livescore.Notification.build(t, m.ac, m.Tim, m.d, n, m.Ccd, m.Scd, m.Tcd), h.push(n)
    }
  }
  return h
};
(function() {
  livescore = {
    ready: function(b) {
      var h = document,
          f = h.firstChild;
      return b && f.doScroll ?
      function(p) {
        var n = function() {
          try {
            f.doScroll("left"), p()
          } catch (m) {
            setTimeout(n, 10)
          }
        };
        n()
      } : /webkit|safari|khtml/i.test(navigator.userAgent) ?
      function(p) {
        var n = function() {
          /loaded|complete/.test(h.readyState) ? p() : setTimeout(n, 10)
        };
        n()
      } : function(p) {
        h.addEventListener("DOMContentLoaded", p, !1)
      }
    }(),
    browser: function(b) {
      var h = "IE IE9 IE8 IE7 IE6 OP FF WK CH IE10 IE11".split(" "),
          f = null;
      if ("filter" in document.body.style && 0 == "opera" in window && void 0 !== window.ActiveXObject) switch (b.versionie) {
      case !0:
        switch (document.documentMode) {
        case 11:
          f = h[10];
          break;
        case 10:
          f = h[9];
          break;
        case 9:
          f = h[1];
          break;
        case 8:
          f = h[2];
          break;
        case 7:
          f = h[3]
        }
        "undefined" == typeof document.body.style.maxHeight && (f = h[4]);
        break;
      default:
        f = h[0]
      }
      "undefined" !== typeof window.crypto && (f = h[6]);
      "-webkit-appearance" in document.body.style && (f = navigator && navigator.userAgent && null !== navigator.userAgent.match(/Chrome/) ? h[8] : h[7]);
      if ("opera" in window || navigator && (navigator.userAgent && null !== navigator.userAgent.match(/[Oo]pera/) || navigator.vendor && null !== navigator.vendor.match(/[Oo]pera/))) f = h[5];
      return f
    },
    id: function(b) {
      return document.getElementById(b)
    },
    getByClassName: function(b) {
      for (var h = document.getElementsByTagName("*"), f = [], p = 0, n = h.length; p < n; p++) {
        var m = h[p].getAttribute("class") || h[p].getAttribute("className");
        if (m == b || null !== m && -1 < m.indexOf(b)) f[f.length] = h[p]
      }
      return f
    },
    validate: function(b) {
      if (null === livescore.id("mailForm")) return !1;
      var h = b.messageMaxLength;
      livescore.id("mailForm").onsubmit =

      function() {
        var f = "";
        if (1 > this.sender.value.indexOf("@") || this.sender.value.indexOf("@") > this.sender.value.length - 5 || 1 > this.sender.value.indexOf(".")) f = b.invalidEmailMessage;
        if ("blank" == this.subject.value || "" == this.subject.value) f += b.invalidSubjectMessage;
        "" == this.message.value && (f += b.invalidMessageBody);
        if ("" != f) return alert(f), !1;
        id("mailForm").submit()
      };
      livescore.id("message").onkeyup = function() {
        this.value.length > h && (alert("Message is limited to 5000 characters !"), this.value = this.value.substring(0, h))
      }
    },
    matchdetails: function(b) {
      $("body").delegate(".scorelink", "click", function(h) {
        null !== window.open(this.href || this.getAttribute("data-href"), b.target, "width=" + b.width + ", height=" + b.height + ", left=" + b.left + ", top=" + b.top + ", menubar=no, status=no, location=no, toolbar=no, scrollbars=yes, resizable=yes") && h.preventDefault()
      })
    },
    resizematchdetailstablejq: function() {
      var b = $("body"),
          h = $("table:visible", b).clone(),
          f = $("<div>"),
          p = 0,
          n = 0;
      switch (livescore.browser({
        versionie: !1
      })) {
      case "IE":
        n = 90;
        break;
      case "OP":
        p =
        20;
        n = 84;
        break;
      case "CH":
        n = 85;
        break;
      case "WK":
        n = 61;
        break;
      case "FF":
        n = 87
      }
      b.append(f);
      f.css("display", "none");
      f.append(h);
      f.width(496);
      b = f.height();
      f.remove();
      window.resizeTo(600 + p, 630 + n);
      window.focus()
    },
    resizematchdetailstable: function() {
      var b = document.getElementsByTagName("body")[0],
          h = "",
          f = 0;
      switch (livescore.browser({
        versionie: !1
      })) {
      case "IE":
        h = 90;
        break;
      case "OP":
        f = 20;
        h = 84;
        break;
      case "CH":
        h = 81;
        break;
      case "WK":
        h = 61;
        break;
      case "FF":
        h = 87
      }
      window.resizeTo(600 + f, 630 + h);
      window.focus()
    }
  }
})();
com.livescore.CookieHelper = {
  getCookie: function(b) {
    for (var h = 0, f = null, p = document.cookie.split(";"), n; h < p.length && null === f;) n = p[h].split("="), n[0].replace(" ", "") == b && (f = n[1]), h++;
    return f
  },
  setCookie: function(b) {
    if (!b || !b.name || !b.value) return !1;
    var h = !1,
        f = b.expiration,
        p = b.domain,
        n, m = b.path || "/";
    f || (f = new Date, f.setFullYear(f.getFullYear() + 1));
    if (!p) {
      p = "";
      var t = location.hostname.split(".");
      for (n = t.length - 1; 0 <= n && !h;) p = (0 == p.length ? t[n] : t[n] + ".") + p, h = b, h.domain = p, h = this.setCookie(h), n--
    }
    if (!h) for (document.cookie =
    b.name + "=" + b.value + ";domain=" + p + ";path=" + m + ";expires=" + f.toGMTString(), f = document.cookie.split(";"), n = 0; n < f.length && !h;) h = $.trim(f[n]) == b.name + "=" + b.value, n++;
    return h
  }
};
com.livescore.TrackingHelper = {
  sendPageview: function(b, h, f) {
    var p = com.livescore.CookieHelper.getCookie("__ga_h_pvc");
    if (null !== p && (p = p.split("|"), 2 <= p.length)) {
      var n = p[0];
      var m = parseInt(p[1], 10)
    }
    if (!m || isNaN(m) || n != h || 0 == m % 1E3) m = 0, b("send", "pageview");
    m++;
    com.livescore.CookieHelper.setCookie({
      name: "__ga_h_pvc",
      value: h + "|" + m,
      expiration: f
    })
  },
  getCookieExpiration: function() {
    var b = new Date,
        h = b.getTime();
    b.setDate(1);
    b.setMonth(b.getMonth() + 1);
    b.setHours(0);
    b.setMinutes(0);
    b.setSeconds(0);
    b.setMilliseconds(0);
    h = b.getTime() - h;
    return {
      date: b,
      time: h
    }
  }
};
com.livescore.CryptUtil = function() {
  function b(p, n, m, t) {
    switch (t.length) {
    case 1:
      return p == t.ch0;
    case 2:
      return p == t.ch0 && n == t.ch1;
    case 3:
      return p == t.ch0 && n == t.ch1 && m == t.ch2;
    default:
      return !1
    }
  }
  function h(p) {
    try {
      var n = f(p.charCodeAt(17));
      var m = f(p.charCodeAt(18));
      var t = f(p.charCodeAt(11));
      var u = f(p.charCodeAt(0)) + f(p.charCodeAt(1)) + f(p.charCodeAt(2)) + f(p.charCodeAt(3)) + f(p.charCodeAt(5)) + f(p.charCodeAt(6)) + f(p.charCodeAt(8)) + f(p.charCodeAt(9)) + t + f(p.charCodeAt(12)) + f(p.charCodeAt(14)) + f(p.charCodeAt(15)) + n + m;
      return m >= n ? u + m - n : u + 3 * (t + 1)
    } catch (B) {
      return 27
    }
  }
  function f(p) {
    if (48 <= p && 57 >= p) return p - 48;
    throw "char value is not a number character";
  }
  return {
    decrypt: function(p) {
      var n = p.charCodeAt(12),
          m = p.charCodeAt(13),
          t = p.charCodeAt(14),
          u = p.charCodeAt(15),
          B = 0,
          y = 0,
          H = 0,
          D = 0,
          F = "";
      if (58 == n && 32 == m) {
        var R = {
          length: 1,
          ch0: 33
        };
        var E = {
          length: 1,
          ch0: 36
        };
        var P = {
          length: 1,
          ch0: 37
        };
        H = 40;
        D = 126;
        B = h(p.substr(14, 19));
        y = 33
      } else 58 == n && 58 == m && 32 == t ? (R = {
        length: 1,
        ch0: 171
      }, E = {
        length: 1,
        ch0: 169
      }, P = {
        length: 1,
        ch0: 187
      }, H = 40, D = 126, B = h(p.substr(15, 19)), y = 34) : 58 == n && 58 == m && 58 == t && 32 == u && (R = {
        length: 3,
        ch0: 33,
        ch1: 36,
        ch2: 34
      }, E = {
        length: 3,
        ch0: 35,
        ch1: 37,
        ch2: 38
      }, P = {
        length: 3,
        ch0: 37,
        ch1: 35,
        ch2: 36
      }, H = 40, D = 126, B = h(p.substr(16, 19)), y = 35);
      for (u = t = p.length - y; 0 < u; u--) {
        m = y + u - 1;
        n = p.charCodeAt(m);
        var I = (t - u + 1) % 10;
        if (n >= H && n <= D) F = n - B - I < H ? F + String.fromCharCode(n - B - I + (D - H + 1)) : F + String.fromCharCode(n - B - I);
        else {
          var O = I = null;
          1 <= m && (I = p.charCodeAt(m - 1));
          2 <= m && (O = p.charCodeAt(m - 2));
          b(O, I, n, R) ? (F += String.fromCharCode(10), u -= R.length - 1) : b(O, I, n, E) ? (F += String.fromCharCode(13), u -= E.length - 1) : b(O, I, n, P) ? (F += String.fromCharCode(32), u -= P.length - 1) : F += p.charAt(m)
        }
      }
      return F
    }
  }
}();
com.livescore.CRU = function() {
  function b(f) {
    if (48 <= f && 57 >= f) return f - 48;
    throw "Error";
  }
  var h = {
    10: {
      len: 3,
      c0: 33,
      c1: 36,
      c2: 34
    },
    13: {
      len: 3,
      c0: 35,
      c1: 37,
      c2: 38
    },
    32: {
      len: 3,
      c0: 37,
      c1: 35,
      c2: 36
    }
  };
  return {
    iv: function(f) {
      try {
        var p = b(f.charCodeAt(23));
        var n = b(f.charCodeAt(24));
        var m = b(f.charCodeAt(17));
        var t = b(f.charCodeAt(12)) + b(f.charCodeAt(13)) + b(f.charCodeAt(14)) + b(f.charCodeAt(15)) + f.charCodeAt(8) % 10 + f.charCodeAt(9) % 10 + f.charCodeAt(10) % 10 + b(f.charCodeAt(5)) + b(f.charCodeAt(6)) + m + b(f.charCodeAt(18)) + b(f.charCodeAt(20)) + b(f.charCodeAt(21)) + p + n;
        return n >= p ? t + n - p : t + 3 * (m + 1)
      } catch (u) {
        return 39
      }
    },
    encode: function(f, p) {
      var n = 0,
          m;
      var t = f.length;
      var u = 103 + Math.floor(50 * Math.random() + 1);
      if (128 <= t) var B = t + "|" + f;
      else
      for (B = t + "|" + f, t = B.length, m = 0; m < u - t; m++) {
        var y = Math.floor(86 * Math.random() + 40);
        B += String.fromCharCode(y)
      }
      t = B;
      B = t.length;
      for (u = ""; n < B;) m = t.charCodeAt(B - 1 - n), 40 <= m && 126 >= m ? (y = (B - n) % 10, y = 126 < m + p + y ? String.fromCharCode(m + p + y - 87) : String.fromCharCode(m + p + y)) : (y = (y = h[m]) && 1 == y.len && y.c0 ? String.fromCharCode(y.c0) : y && 2 == y.len && y.c0 && y.c1 ? String.fromCharCode(y.c0) + String.fromCharCode(y.c1) : y && 3 == y.len && y.c0 && y.c1 && y.c2 ? String.fromCharCode(y.c0) + String.fromCharCode(y.c1) + String.fromCharCode(y.c2) : null, null == y ? y = String.fromCharCode(m) : (m = 0 < y.length ? y.length - 1 : 0, n += m, B += m)), u += y, n++;
      return u
    },
    decode: function(f, p) {
      var n = f.charCodeAt(12),
          m = f.charCodeAt(13),
          t = f.charCodeAt(14),
          u = f.charCodeAt(15),
          B = "",
          y, H;
      if (58 == n && 32 == m) {
        var D = {
          length: 1,
          ch0: 33
        };
        var F = {
          length: 1,
          ch0: 36
        };
        var R = {
          length: 1,
          ch0: 37
        };
        t = 40;
        u = 126;
        n = cryptKeyFromData(f.substr(14, 19));
        m = 33
      } else 58 == n && 58 == m && 32 == t ? (D = {
        length: 1,
        ch0: 171
      }, F = {
        length: 1,
        ch0: 169
      }, R = {
        length: 1,
        ch0: 187
      }, t = 40, u = 126, n = cryptKeyFromData(f.substr(15, 19)), m = 34) : 58 == n && 58 == m && 58 == t && 32 == u ? (D = {
        length: 3,
        ch0: 33,
        ch1: 36,
        ch2: 34
      }, F = {
        length: 3,
        ch0: 35,
        ch1: 37,
        ch2: 38
      }, R = {
        length: 3,
        ch0: 37,
        ch1: 35,
        ch2: 36
      }, t = 40, u = 126, n = cryptKeyFromData(f.substr(16, 19)), m = 35) : (D = {
        length: 3,
        ch0: 33,
        ch1: 36,
        ch2: 34
      }, F = {
        length: 3,
        ch0: 35,
        ch1: 37,
        ch2: 38
      }, R = {
        length: 3,
        ch0: 37,
        ch1: 35,
        ch2: 36
      }, t = 40, u = 126, n = p, m = 0);
      for (H = y = f.length - m; 0 < H; H--) {
        var E = m + H - 1;
        var P =
        f.charCodeAt(E);
        var I = (y - H + 1) % 10;
        if (P >= t && P <= u) B = P - n - I < t ? B + String.fromCharCode(P - n - I + (u - t + 1)) : B + String.fromCharCode(P - n - I);
        else {
          var O = I = null;
          1 <= E && (I = f.charCodeAt(E - 1));
          2 <= E && (O = f.charCodeAt(E - 2));
          checkSpecialChars(O, I, P, D) ? (B += String.fromCharCode(10), H -= D.length - 1) : checkSpecialChars(O, I, P, F) ? (B += String.fromCharCode(13), H -= F.length - 1) : checkSpecialChars(O, I, P, R) ? (B += String.fromCharCode(32), H -= R.length - 1) : B += f.charAt(E)
        }
      }
      return B
    }
  }
}();
com.livescore.CommentLoaderUtil = function() {
  function b() {
    function n(B, y) {
      return 0 <= m.indexOf(B + "-" + y)
    }
    var m = "";
    if (supports_html5_storage()) {
      var t = localStorage.openComments || location.pathname + ":",
          u = t.split(":");
      2 > u.length || u[0] != location.pathname ? (m = location.pathname + ":", localStorage.openComments = m) : m = t
    }
    return {
      hasOpenComment: n,
      storeOpenComment: function(B, y) {
        supports_html5_storage() && !n(B, y) && (m += "|" + B + "-" + y, localStorage.openComments = m)
      },
      removeOpenComment: function(B, y) {
        supports_html5_storage() && n(B, y) && (m = m.replace(B + "-" + y, "").replace("||", "|"), localStorage.openComments = m)
      }
    }
  }
  function h(n, m, t) {
    var u, B = "";
    $.each(n, function() {
      this && this.id && this.container && (B += 0 == B.length ? this.id : "," + this.id)
    });
    if (0 < B.length) {
      var y = new Date;
      var H = com.livescore.CRU.encode(B, com.livescore.CRU.iv(y.toUTCString()));
      var D = "//" + location.host + "/comments/soccer/";
      $.ajax(D, {
        type: "GET",
        dataType: "text",
        data: {
          t: y.getTime(),
          d: H
        },
        success: function(F) {
          try {
            u = $.parseJSON(com.livescore.CryptUtil.decrypt(F)), $.each(n, function() {
              this && this.id && this.container && p(this.id, this.container, u, m, t)
            })
          } catch (R) {
            t && $.each(n, function() {
              t(this.id, this.container)
            })
          }
        },
        error: function(F, R, E) {
          t && $.each(n, function() {
            t(this.id, this.container)
          })
        }
      })
    }
  }
  function f(n, m, t, u, B) {
    var y = n + "-" + m;
    n = "//" + location.host + "/comments/soccer/";
    var H;
    m = new Date;
    var D = com.livescore.CRU.encode(y, com.livescore.CRU.iv(m.toUTCString()));
    $.ajax(n, {
      type: "GET",
      dataType: "text",
      data: {
        t: m.getTime(),
        d: D
      },
      success: function(F) {
        try {
          H = $.parseJSON(com.livescore.CryptUtil.decrypt(F)), p(y, t, H, u, B)
        } catch (R) {
          B && B(y, t)
        }
      },
      error: function(F, R, E) {
        B && B(y, t)
      }
    })
  }
  function p(n, m, t, u, B) {
    var y = $('div:has([data-type="text"]):first', m).clone(),
        H, D, F;
    t && t[n] ? (t = t[n]) && t.Com ? ($('[data-name="comment_row"]', m).remove(), $.each(t.Com, function(R) {
      D = "";
      this.Min && (D = this.Min, this.MinEx && (D += "+" + this.MinEx), D += "'");
      F = this.Txt;
      H = y.clone();
      40 <= R && H.attr("data-type", "ext");
      $('[data-type="time"]', H).html(D);
      $('[data-type="text"]', H).html(F);
      m.append(H)
    }), u && u(n, m)) : B && B(n, m) : B && B(n, m)
  }
  return {
    init: function() {
      var n =
      $('[data-type="more_comment_btn"]'),
          m = [];
      if (0 < n.length) {
        var t = b();
        var u = $(n[0]).clone();
        var B = function(H, D) {
          var F = H.split("-");
          if (2 <= F.length) {
            F = u.clone().text("Less commentaries").attr("data-pid", F[0]).attr("data-id", F[1]);
            var R = $('[data-type="panel"]', D);
            R.empty().append(F);
            R.detach();
            R.appendTo(D)
          }
        };
        var y = function(H, D) {
          var F = H.split("-");
          if (2 <= F.length) {
            F = u.clone().attr("data-pid", F[0]).attr("data-id", F[1]);
            var R = $('[data-type="panel"]', D);
            R.empty().append(F);
            R.detach();
            R.appendTo(D)
          }
        };
        $("body").delegate('[data-type="more_comment_btn"]', "click", function(H) {
          H.preventDefault();
          H = $(this).attr("data-pid");
          var D = $(this).attr("data-id"),
              F = $(this).closest('[data-type="comment_container"]'),
              R;
          0 < H.length && 0 < D.length && ((R = t.hasOpenComment(H, D)) ? (t.removeOpenComment(H, D), $('[data-type="ext"]', F).remove(), $(this).text("More commentaries")) : ($('[data-type="panel"]', F).empty().text("Loading commentaries..."), t.storeOpenComment(H, D), f(H, D, F, B, y)))
        });
        n.each(function() {
          var H = $(this).attr("data-pid"),
              D = $(this).attr("data-id");
          if (void 0 !== H && void 0 !== D && t.hasOpenComment(H, D)) {
            var F = $(this).closest('[data-type="comment_container"]');
            $('[data-type="panel"]', F).empty().text("Loading commentaries...");
            m.push({
              id: H + "-" + D,
              container: F
            })
          }
        });
        h(m, B, y)
      } else supports_html5_storage() && (n = localStorage.openComments, void 0 != n || "" != n) && (localStorage.openComments = "")
    }
  }
}();
com.livescore.NotificationServiceSettings = {
  host: location.host,
  tickerPath: "/ticker",
  sports: ["soccer", "tennis", "hockey", "basketball", "cricket"],
  maxItems: 50,
  refreshPeriod: 5E3,
  notificationExpiry: 7200
};
com.livescore.NotificationWidgetSettings = {
  latestMaxItems: 10,
  refreshPeriod: 5E3,
  geoAdsConfigEnabled: !0,
  geoAdsConfigRefreshPeriod: 6E4,
  geoAdsConfigRequestTimeout: 2E3,
  icons: {
    1: {
      4: "sub-out",
      5: "sub-in",
      36: "goal",
      39: "goal",
      47: "goal",
      70: "goal",
      66: "goal",
      37: "goal",
      38: "goal-miss",
      57: "goal",
      48: "goal-miss",
      41: "goal",
      40: "goal-miss",
      43: "yellowcard",
      44: "redcard",
      45: "redcard",
      46: "empty",
      62: "goal-miss"
    },
    5: {
      36: "goal",
      39: "goal",
      47: "goal",
      70: "goal",
      66: "goal",
      50: "goal",
      37: "goal",
      38: "goal-miss",
      57: "goal",
      48: "goal-miss",
      41: "goal",
      40: "goal-miss",
      52: "to2min",
      53: "to5min",
      54: "to10min",
      51: "goal",
      62: "goal-miss"
    }
  },
  highlightColors: {
    soccer: "#844114",
    hockey: "#026AB0",
    basketball: "#7B641F",
    tennis: "#676666",
    cricket: "#11470F"
  },
  highlightedNotificationMaxAge: 12E4,
  highlightDuration: 5E3,
  highlightFadeOutDuration: 1E3,
  initialAnimationMaxDelay: 2E3,
  initialAnimationDuration: 750,
  betButtonConfig: {
    url: "/",
    site: "1",
    pos: "25"
  },
  events: {
    soccer: {
      "world-cup": "worldcup",
      euro: "euro"
    }
  }
};
com.livescore.ClockWidgetSettings = {
  months: "Jan Feb Mar Apr May Jun Jul Aug Sep Oct Nov Dec".split(" "),
  days: "Sun Mon Tue Wed Thu Fri Sat".split(" ")
};
com.livescore.AdWidgetSettings = {
  refreshPeriod: 6E4
};
com.livescore.LeagueTableWidgetSettings = {
  sports: {
    soccer: 1,
    basketball: 1,
    hockey: 1
  },
  baseUrl: "/mlt-ticker/",
  stageNames: {
    nhl: {
      "regular-season": {
        "Eastern Conference": "NHL - E",
        "Western Conference": "NHL - W"
      }
    },
    khl: {
      "main-part": {
        East: "KHL - E",
        West: "KHL - W"
      }
    },
    nba: {
      "regular-season": {
        "Eastern Conference": "NBA - E",
        "Western Conference": "NBA - W"
      }
    },
    "world-championship": {
      "preliminary-group-a": {
        "Group A": "WC Grp. A"
      },
      "preliminary-group-b": {
        "Group B": "WC Grp. B"
      }
    },
    adriatic: {
      "nbl-league": {
        "ABA League": "ABA"
      }
    }
  },
  advancePhases: {
    5: {
      col: "light-teal",
      txt: "Championship play-off",
      pos: 40
    },
    10: {
      col: "dark-green",
      txt: "Promotion",
      pos: 21
    },
    11: {
      col: "light-green",
      txt: "Promotion play-off",
      pos: 22
    },
    15: {
      col: "dark-red",
      txt: "Relegation",
      pos: 43
    },
    16: {
      col: "light-red",
      txt: "Relegation play-off",
      pos: 44
    },
    20: {
      col: "dark-blue",
      txt: "Champions League",
      pos: 1
    },
    21: {
      col: "light-blue",
      txt: "Champions League qualification",
      pos: 6
    },
    25: {
      col: "dark-yellow",
      txt: "Europa League",
      pos: 12
    },
    26: {
      col: "light-yellow",
      txt: "Europa League qualification",
      pos: 16
    },
    27: {
      col: "light-purple",
      txt: "Europa League qualification play-off",
      pos: 19
    },
    30: {
      col: "dark-teal",
      txt: "Next stage",
      pos: 11
    },
    37: {
      col: "light-blue",
      txt: "CAF Champions League qualification",
      pos: 7
    },
    39: {
      col: "light-yellow",
      txt: "CAF Confederation Cup qualification",
      pos: 17
    },
    42: {
      col: "dark-blue",
      txt: "AFC Champions League",
      pos: 2
    },
    43: {
      col: "light-blue",
      txt: "AFC Champions League qualification",
      pos: 8
    },
    44: {
      col: "dark-yellow",
      txt: "AFC Cup",
      pos: 13
    },
    45: {
      col: "light-yellow",
      txt: "AFC Cup qualification",
      pos: 18
    },
    46: {
      col: "dark-teal",
      txt: "AFC President's Cup",
      pos: 20
    },
    50: {
      col: "dark-blue",
      txt: "Copa Libertadores",
      pos: 3
    },
    51: {
      col: "light-blue",
      txt: "Copa Libertadores qualification",
      pos: 9
    },
    52: {
      col: "dark-yellow",
      txt: "Copa Sudamericana",
      pos: 14
    },
    58: {
      col: "dark-blue",
      txt: "CONCACAF Champions League",
      pos: 4
    },
    60: {
      col: "dark-yellow",
      txt: "CFU Club Championship",
      pos: 15
    },
    64: {
      col: "dark-blue",
      txt: "OFC Champions League",
      pos: 5
    },
    65: {
      col: "light-blue",
      txt: "OFC Champions League qualification",
      pos: 10
    },
    100: {
      col: "dark-blue",
      txt: "Additional spot(s) for UEFA Champions League from championship play-off",
      pos: 23
    },
    101: {
      col: "light-blue",
      txt: "Additional spot(s) for UEFA Champions League qualification from championship play-off",
      pos: 28
    },
    102: {
      col: "dark-yellow",
      txt: "Additional spot(s) for UEFA Europa League from championship play-off",
      pos: 33
    },
    103: {
      col: "light-yellow",
      txt: "Additional spot(s) for UEFA Europa League qualification from championship play-off",
      pos: 37
    },
    107: {
      col: "dark-blue",
      txt: "Additional spot(s) for CAF Champions League qualification from championship play-off",
      pos: 29
    },
    109: {
      col: "dark-yellow",
      txt: "Additional spot(s) for CAF Confederation Cup qualification from championship play-off",
      pos: 38
    },
    112: {
      col: "dark-blue",
      txt: "Additional spot(s) for AFC Champions League from championship play-off",
      pos: 24
    },
    113: {
      col: "light-blue",
      txt: "Additional spot(s) for AFC Champions League qualification from championship play-off",
      pos: 30
    },
    114: {
      col: "dark-yellow",
      txt: "Additional spot(s) for AFC Cup from championship play-off",
      pos: 34
    },
    115: {
      col: "light-yellow",
      txt: "Additional spot(s) for AFC Cup qualification from championship play-off",
      pos: 39
    },
    116: {
      col: "dark-teal",
      txt: "Additional spot(s) for AFC President's Cup from championship play-off",
      pos: 41
    },
    120: {
      col: "medium-blue",
      txt: "Additional spot(s) for Copa Libertadores from championship play-off",
      pos: 25
    },
    121: {
      col: "light-blue",
      txt: "Additional spot(s) for Copa Libertadores qualification from championship play-off",
      pos: 31
    },
    122: {
      col: "dark-yellow",
      txt: "Additional spot(s) for Copa Sudamericana from championship play-off",
      pos: 35
    },
    126: {
      col: "dark-blue",
      txt: "Additional spot(s) for CONCACAF Champions League from championship play-off",
      pos: 26
    },
    128: {
      col: "dark-yellow",
      txt: "Additional spot(s) for CFU Club Championship from championship play-off",
      pos: 36
    },
    132: {
      col: "medium-blue",
      txt: "Additional spot(s) for OFC Champions League from championship play-off",
      pos: 27
    },
    133: {
      col: "light-blue",
      txt: "Additional spot(s) for OFC Champions League qualification from championship play-off",
      pos: 32
    }
  }
};
com.livescore.OddsServiceSettings = {
  host: window.location.host,
  basePath: "/odds/",
  providers: ["1"],
  sports: ["soccer"],
  refreshPeriod: 6E4
};
com.livescore.OddsBannerWidgetSettings = {
  bookmakers: ["14", "23", "141"],
  initTimeout: 5E3
};
com.livescore.MatchServiceSettings = {
  host: location.host,
  basePath: "/~~custom~01/",
  basePathNew: "/v1/api/web/mym/",
  updateCheckPeriod: 1E3,
  dataReloadPeriod: 6E4,
  maxRetries: 3,
  retryPeriod: 5E3,
  finishedMyMatchExpiration: 172800
};
com.livescore.MatchListWidgetSettings = {
  sports: ["soccer", "tennis", "hockey", "basketball", "cricket"]
};
com.livescore.EventHandler = function() {
  this.callbacks = []
};
com.livescore.EventHandler.prototype.bind = function(b, h) {
  this.callbacks.push({
    obj: b,
    fn: h
  })
};
com.livescore.EventHandler.prototype.unbind = function(b, h) {
  var f;
  for (f = this.callbacks.length; 0 <= --f;) {
    var p = this.callbacks[f];
    if (p.obj === b && p.fn === h) {
      this.callbacks.splice(f, 1);
      break
    }
  }
};
com.livescore.EventHandler.prototype.raise = function(b) {
  var h;
  for (h = this.callbacks.length; 0 <= --h;) {
    var f = this.callbacks[h];
    f.obj ? f.fn.call(f.obj, b) : f.fn(b)
  }
};
com.livescore.ClockWidget = function() {
  function b() {
    var f = (new Date).getTime() + 36E5 * h;
    f = new Date(f);
    if (0 == h) var p = "UTC";
    else {
      p = Math.floor(Math.abs(h));
      var n = Math.round(60 * (Math.abs(h) - p));
      p = (0 > h ? "-" : "+") + (10 > p ? "0" + p : p) + ":" + (10 > n ? "0" + n : n)
    }
    n = f.getUTCHours();
    var m = f.getUTCMinutes();
    var t = com.livescore.ClockWidgetSettings.months[f.getUTCMonth()];
    var u = com.livescore.ClockWidgetSettings.days[f.getUTCDay()];
    f = (10 > n ? "0" + n : n) + ":" + (10 > m ? "0" + m : m) + " (" + p + ")<span>" + f.getUTCDate() + " " + t + " " + f.getUTCFullYear() + " (" + u + ")</span>";
    $('[data-type="date"] a').html(f);
    window.setTimeout(function() {
      b()
    }, 1E3)
  }
  var h = 0;
  return {
    start: function(f) {
      h = f;
      b()
    }
  }
}();
com.livescore.AdWidget = function() {
  function b() {
    n.each(function() {
      var y = $(this),
          H = y.attr("src");
      void 0 !== H && null !== H && y.attr("src", H)
    });
    h();
    window.setTimeout(b, com.livescore.AdWidgetSettings.refreshPeriod)
  }
  function h() {
    void 0 !== m && m.each(function() {
      var y = $(this),
          H = y.attr("data-url"),
          D = y.attr("data-width");
      y = y.attr("data-height");
      void 0 !== H && void 0 !== D && void 0 !== y && com.livescore.JsonpService.sendRequest(H + "&jsonp=1", "process")
    })
  }
  function f(y) {
    if (void 0 !== y.data && void 0 !== y.data.data && void 0 !== y.data.id) {
      var H = "/",
          D = $('[data-type="jbnr"][data-url="' + H + '&t=1"]');
      0 == D.length && (D = $('[data-type="jbnr"][data-url="' + H + '"]'));
      var F = D.attr("data-width");
      var R = D.attr("data-height");
      H = "1" == D.attr("data-static");
      var E = "true" == D.attr("data-resize");
      if (0 < D.length && void 0 !== F && void 0 !== R) {
        R = $("<div></div>").css({
          width: "1px",
          height: "1px",
          position: "absolute",
          visibility: "hidden"
        });
        $("body").append(R);
        R.html(y.data.data);
        F = R.text();
        R.remove();
        R = D.hasClass("hidden");
        D.removeClass("hidden");
        if ("admob" == y.data.btype) $("> iframe", D).addClass("hidden"), $("> div", D).removeClass("hidden").html(F);
        else {
          $("> div", D).addClass("hidden");
          var P = $("> iframe", D);
          R && P.css("position", "absolute").css("visibility", "hidden").removeClass("hidden");
          y = P[0].contentWindow.document;
          y.open();
          y.write(F);
          y.close()
        }
        0 < D.closest('[data-type="sticky-bnr"]').length && $(".content").addClass("pb48");
        R && (D.hide(), void 0 !== P && P.css("position", "").css("visibility", ""), E ? (D.css("margin-top", "10px"), D.show(), livescore.resizematchdetailstable()) : !0 === H ? D.show() : D.slideDown({
          duration: 300,
          step: function() {
            p()
          }
        }))
      }
    }
  }
  function p() {
    if (void 0 !== t && 0 < t.length && void 0 !== B && 0 < B.length) {
      var y = $(window);
      var H = void 0 !== u && 0 < u.length && u.is(":visible") ? u.height() : 0;
      y.scrollTop() + y.height() - H + 4 >= t.offset().top ? (y = B.width() + 6, $('[data-type="sticky-bnr"] > div').css({
        position: "absolute",
        bottom: t.height() + 5 + "px",
        left: y + "px"
      })) : (y = B.offset().left + B.width() + 6 - y.scrollLeft(), $('[data-type="sticky-bnr"] > div').css({
        position: "fixed",
        bottom: H + "px",
        left: y + "px"
      }))
    }
  }
  var n, m, t, u, B;
  return {
    init: function() {
      m = $('[data-type="jbnr"]');
      com.livescore.JsonpService.onDataReceived.bind(this, f);
      var y = $(window);
      t = $(".footer");
      u = $('[data-id="infobar"]');
      B = $(".left-bar");
      y.resize(p);
      y.scroll(p);
      p();
      h()
    },
    start: function() {
      n = $('[data-type="bnr"], [data-type="ad4"]');
      window.setTimeout(b, com.livescore.AdWidgetSettings.refreshPeriod)
    },
    updateBanners: function() {
      n = $('[data-type="bnr"], [data-type="ad4"]')
    },
    updateStickyBannerPos: p
  }
}();
window.process = function(b) {
  setTimeout(function() {
    updateGambleAwareNote(b.c)
  }, 0)
};
$.ajax({
  url: "/",
  jsonp: "process",
  dataType: "jsonp"
});

function updateGambleAwareNote(b) {
  void 0 === b && null !== detectedCountry || void 0 === b || (detectedCountry = b, $('[data-type="virtual"]').addClass("hidden"), $('[data-type="virtual-inv"]').removeClass("hidden"), $('[data-type="virtual"][data-cc*="' + detectedCountry + '"]').removeClass("hidden"), $('[data-type="virtual-inv"][data-cc*="' + detectedCountry + '"]').addClass("hidden"))
}
com.livescore.MatchList = function(b) {
  this._storage = {};
  this._array = [];
  this._index = 0;
  this._name = b;
  this.load()
};
com.livescore.MatchList.prototype.add = function(b) {
  void 0 !== b.id && (this._storage[b.id] = b, 0 > this._array.indexOf(b.id) && this._array.push(b.id), this.store())
};
com.livescore.MatchList.prototype.get = function(b) {
  b = this._storage[b];
  return void 0 === b ? null : b
};
com.livescore.MatchList.prototype.getByIndex = function(b) {
  return b >= this._array.length ? null : this.get(this._array[b])
};
com.livescore.MatchList.prototype.toArray = function() {
  var b = [],
      h;
  for (this.reset(); h = this.next();) b.push(h);
  return b
};
com.livescore.MatchList.prototype.exists = function(b) {
  return null !== this.get(b)
};
com.livescore.MatchList.prototype.remove = function(b) {
  var h = this._array.indexOf(b);
  0 <= h && this._array.splice(h, 1);
  delete this._storage[b];
  this.store()
};
com.livescore.MatchList.prototype.next = function() {
  var b = this.getByIndex(this._index);
  this._index++;
  return null !== b ? b : !1
};
com.livescore.MatchList.prototype.reset = function() {
  this._index = 0
};
com.livescore.MatchList.prototype.store = function() {
  if (supports_html5_storage()) {
    var b = {
      d: this._storage,
      a: this._array
    };
    try {
      localStorage[this._name] = JSON.stringify(b)
    } catch (h) {}
  }
};
com.livescore.MatchList.prototype.load = function() {
  var b;
  if (supports_html5_storage()) {
    var h = localStorage[this._name];
    "my_matches" !== this._name || void 0 !== h && null !== h && "" !== h || !localStorage.hasOwnProperty("undefined") || (h = localStorage.undefined, localStorage[this._name] = h, localStorage.removeItem("undefined"));
    try {
      var f = $.parseJSON(h)
    } catch (m) {}
    if (void 0 !== f && void 0 !== f.a && void 0 !== f.d) {
      h = {};
      var p = [];
      for (b = 0; b < f.a.length; b++) {
        var n = f.d[f.a[b]];
        void 0 !== n && void 0 !== n.providerId && void 0 !== n.matchId && void 0 !== n.scheduledStart && void 0 !== n.sportCode && void 0 !== n.id && (h[n.id] = n, p.push(n.id))
      }
      this._storage = h;
      this._array = p
    }
  }
};
com.livescore.MatchUpdateEvent = function(b, h, f) {
  this.sender = b;
  this.action = h;
  this.data = f
};
com.livescore.MatchService = function() {
  function b(F, R) {
    var E = this,
        P, I, O, Z;
    var da = D ? "//" + com.livescore.MatchServiceSettings.host + com.livescore.MatchServiceSettings.basePathNew + F + "/0" : "//" + com.livescore.MatchServiceSettings.host + com.livescore.MatchServiceSettings.basePath + F + "/";
    null !== y && (window.clearTimeout(y), y = null);
    if (void 0 === R || null === R) for (R = [], t.reset(); I = t.next();) I.sportCode == F && (D ? R.push("" + (8 === I.providerId ? I.matchId : I.providerId + "-" + I.matchId)) : R.push({
      Pid: I.providerId,
      Eid: I.matchId
    }));
    0 < R.length ? $.ajax({
      url: da,
      data: JSON.stringify({
        Events: R
      }),
      type: "POST",
      success: function(N) {
        if (void 0 !== N) try {
          D ? Z = N : (O = com.livescore.CryptUtil.decrypt(N), Z = $.parseJSON(O)), void 0 !== Z && void 0 !== Z.Stages && (P = com.livescore.Stage.stageList(Z.Stages, F, !0)), B.raise(new com.livescore.MatchUpdateEvent(E, "matchDataReceived", P))
        } catch (Q) {}
      },
      complete: function(N, Q) {
        h(F, "error" == Q || "nocontent" == Q || "parseerror" == Q || "timeout" == Q)
      }
    }) : B.raise(new com.livescore.MatchUpdateEvent(E, "matchDataReceived", []))
  }
  function h(F, R) {
    if (R && H < com.livescore.MatchServiceSettings.maxRetries) {
      H++;
      var E = com.livescore.MatchServiceSettings.retryPeriod
    } else H = 0, E = com.livescore.MatchServiceSettings.dataReloadPeriod;
    y = window.setTimeout(function() {
      b(F)
    }, E)
  }
  function f(F) {
    return t.exists(F.id)
  }
  function p() {
    t.load();
    B.raise(new com.livescore.MatchUpdateEvent(this, "localStorageUpdate", t.toArray()))
  }
  function n() {
    u = (new Date).getTime();
    localStorage.matches_last_updated = u
  }
  function m() {
    if (supports_html5_storage()) {
      var F = localStorage.matches_last_updated;
      F > u && (u = F, p());
      window.setTimeout(m, com.livescore.MatchServiceSettings.updateCheckPeriod)
    }
  }
  var t = new com.livescore.MatchList("my_matches");
  var u = supports_html5_storage() ? localStorage.matches_last_updated || 0 : 0;
  var B = new com.livescore.EventHandler,
      y = null,
      H = 0,
      D = !1;
  m();
  return {
    onUpdate: B,
    loadMyMatchesData: b,
    getMyMatches: function() {
      return t
    },
    processMatch: function(F) {
      if (f(F)) return t.remove(F.id), n(), !1;
      t.add(F);
      n();
      return !0
    },
    updateMatch: function(F) {
      if (void 0 !== F && null !== F) {
        var R = t.get(F.id);
        void 0 !== R && null !== R && R.scheduledStart != F.scheduledStart && t.add(F)
      }
    },
    removeMatch: function(F) {
      f(F) && (t.remove(F.id), n())
    },
    isMyMatch: f,
    setUseNewEndpoints: function(F) {
      D = F
    }
  }
}();
com.livescore.NotificationUpdateEvent = function(b, h, f) {
  this.sender = b;
  this.updatedItems = h;
  this.action = f
};
com.livescore.NotificationUtils = function() {
  return {
    timestampToString: function(b) {
      for (b = "" + b; 16 > b.length;) b = "0" + b;
      return b
    },
    apiTimestampToDate: function(b) {
      b = Math.floor(b / 100);
      var h = Math.floor(b / 1E6) % 100,
          f = Math.floor(b / 1E8) % 100,
          p = Math.floor(b / 1E10),
          n = new Date;
      n.setUTCHours(Math.floor(b / 1E4) % 100, Math.floor(b / 100) % 100, b % 100, 0);
      n.setUTCFullYear(p, f - 1, h);
      return n
    }
  }
}();
com.livescore.NotificationService = function() {
  function b() {
    var u = (new Date).getTime();
    if (-1 < com.livescore.NotificationServiceSettings.sports.indexOf(m)) {
      var B = "//" + com.livescore.NotificationServiceSettings.host + com.livescore.NotificationServiceSettings.tickerPath,
          y = {
          sport: m,
          since: com.livescore.NotificationUtils.timestampToString(n)
          },
          H, D, F, R, E = (new Date).getTime() - 1E3 * com.livescore.NotificationServiceSettings.notificationExpiry;
      $.ajax({
        url: B,
        data: y,
        dataType: "text",
        type: "GET",
        cache: !1,
        success: function(P) {
          var I = {};
          try {
            I = $.parseJSON(com.livescore.CryptUtil.decrypt(P))
          } catch (O) {}
          H = [];
          D = [];
          F = [];
          0 == I.st && void 0 !== I.nt && (n = I.nt, H = com.livescore.Notification.notificationList(I.d), 0 < H.length && $.each(H, function() {
            var O = this.providerId + "-" + this.matchId + "-" + this.timestamp;
            0 > p.indexOf(O) && com.livescore.NotificationUtils.apiTimestampToDate(this.timestamp).getTime() >= E && (p.push(O), D.push(this))
          }), f = $.merge(f, D), $.each(f, function() {
            com.livescore.NotificationUtils.apiTimestampToDate(this.timestamp).getTime() < E && F.push(this)
          }), f.splice(0, F.length), R = f.length - com.livescore.NotificationServiceSettings.maxItems, 0 < R && (F = $.merge(F, f.splice(0, R)), $.each(F, function() {
            var O = p.indexOf(this.providerId + "-" + this.matchId + "-" + this.timestamp);
            0 <= O && p.splice(O, 1)
          })), t.raise(new com.livescore.NotificationUpdateEvent(this, {
            add: D,
            remove: F
          }, "update")))
        },
        complete: function() {
          h(u)
        }
      })
    }
  }
  function h(u) {
    u = (new Date).getTime() - u;
    u > com.livescore.NotificationServiceSettings.refreshPeriod ? b(m) : window.setTimeout(function() {
      b(m)
    }, com.livescore.NotificationServiceSettings.refreshPeriod - u)
  }
  var f = [],
      p = [],
      n = 0,
      m = null,
      t = new com.livescore.EventHandler;
  return {
    onUpdate: t,
    init: function(u) {
      $.support.cors = !0;
      m = u
    },
    start: function() {
      b()
    },
    allNotifications: function() {
      return f
    }
  }
}();
com.livescore.JsonpDataReceivedEvent = function(b, h, f) {
  this.sender = b;
  this.id = h;
  this.data = f
};
com.livescore.JsonpService = function() {
  var b = new com.livescore.EventHandler,
      h = this,
      f, p = function(n) {
      n.c && 0 < n.c.length && ($('[data-type="virtual"]').addClass("hidden"), $('[data-type="virtual-inv"]').removeClass("hidden"), $('[data-type="virtual"][data-cc*="' + n.c + '"]').removeClass("hidden"), $('[data-type="virtual-inv"][data-cc*="' + n.c + '"]').addClass("hidden"));
      b.raise(new com.livescore.JsonpDataReceivedEvent(h, "process", n))
      };
  return {
    onDataReceived: b,
    sendRequest: function(n, m, t, u) {
      void 0 !== n && null !== n && 0 < n.length && (m = m || "process", "process" != m ? window[m] = window[m] ||
      function(B) {
        b.raise(new com.livescore.JsonpDataReceivedEvent(h, m, B))
      } : window[m] != p && (window[m] = p), $('script[src="' + n + '"]').remove(), void 0 !== t && void 0 !== u && window.setTimeout(function() {
        b.raise(new com.livescore.JsonpDataReceivedEvent(h, m, {
          id: u
        }))
      }, t), f = $("<script>\x3c/script>").attr("src", n).attr("async", "true"), $("body").append(f))
    }
  }
}();
com.livescore.LeagueTableWidget = function() {
  function b(N) {
    var Q = (new Date).getTime();
    !O && null === Z && 5E3 <= Q - da && void 0 !== N.updatedItems && void 0 !== N.updatedItems.add && 0 < N.updatedItems.add.length ? (O = !0, h()) : null === Z && void 0 !== N.updatedItems && void 0 !== N.updatedItems.add && 0 < N.updatedItems.add.length && (Z = window.setTimeout(function() {
      Z = null;
      O = !0;
      h()
    }, 5E3))
  }
  function h() {
    f(function(N, Q) {
      N && p(Q);
      da = (new Date).getTime();
      O = !1
    })
  }
  function f(N) {
    $.ajax({
      url: com.livescore.LeagueTableWidgetSettings.baseUrl + y + "/",
      dataType: "text",
      type: "GET",
      cache: !1,
      success: function(Q) {
        var S = {};
        try {
          S = $.parseJSON(com.livescore.CryptUtil.decrypt(Q))
        } catch (W) {}
        N && N(!0, S)
      },
      error: function(Q, S, W) {
        N && N(!1, {
          status: S,
          error: W
        })
      }
    })
  }
  function p(N) {
    var Q, S, W;
    void 0 !== N.Stages && 0 < N.Stages.length && !I && (E.empty(), $.each(N.Stages, function() {
      Q = this;
      S = [];
      W = null;
      void 0 !== Q.LeagueTable && void 0 !== Q.LeagueTable.Tables && 0 < Q.LeagueTable.Tables.length && ($.each(Q.LeagueTable.Tables, function() {
        1 == this.LTT ? W = this : 11 == this.LTT && S.push(this)
      }), 0 < S.length ? $.each(S, function(aa) {
        n(Q, this, aa)
      }) : void 0 !== W && null !== W && n(Q, W, 0))
    }), t())
  }
  function n(N, Q, S) {
    var W;
    if (void 0 !== Q.team && 0 < Q.team.length) {
      var aa = $('[data-type="league-table"]', P).clone();
      var oa = $('[data-type="league-name"]', aa);
      var na = $('[data-type="points_header"]', aa);
      var wa = $('[data-type="team-data"]', aa);
      var mb = $('[data-type="team-data-tpl"] [data-type="item"]', aa);
      aa.attr("data-name", N.Ccd + "-" + N.Scd + "-" + S);
      oa.attr("href", "/" + y + "/" + N.Ccd + "/" + N.Scd + "/");
      oa.attr("title", N.Cnm + " - " + N.Snm);
      oa.text(m(N, Q.name));
      void 0 !== Q.team[0].per ? (na.attr("title", "Percentage"), na.text("PER")) : (na.attr("title", "Points"), na.text("PTS"));
      $.each(Q.team, function(Za) {
        var Da = mb.clone();
        var pa = $('[data-type="tooltip"]', Da);
        1 == Za % 2 && Da.addClass("even");
        1 != this.Ipr && ($('[data-type="live-indicator"] img', Da).remove(), $('[data-type="live-indicator"]', Da).html("&nbsp;"));
        void 0 !== this.phr && 0 < this.phr.length ? (this.phr.sort(function(Bb, ob) {
          var pb = com.livescore.LeagueTableWidgetSettings.advancePhases[Bb],
              yb = com.livescore.LeagueTableWidgetSettings.advancePhases[ob];
          return void 0 !== pb && void 0 !== pb.pos && void 0 !== yb && void 0 !== yb.pos ? yb.pos - pb.pos : 0
        }), W = com.livescore.LeagueTableWidgetSettings.advancePhases[this.phr[0]], void 0 !== W && void 0 !== W.col && $('[data-type="primary-color"]', Da).addClass(W.col), void 0 !== W && void 0 !== W.txt ? pa.text(W.txt) : pa.remove()) : pa.remove();
        void 0 !== this.phr && 1 < this.phr.length ? (W = com.livescore.LeagueTableWidgetSettings.advancePhases[this.phr[1]], void 0 !== W && void 0 !== W.col && $('[data-type="secondary-color"]', Da).addClass(W.col), void 0 !== W && void 0 !== W.txt && (0 < pa.text().length ? pa.text(pa.text() + "/" + W.txt) : pa.text(W.txt))) : $('[data-type="secondary-color"]', Da).remove();
        void 0 !== this.phr && 2 < this.phr.length ? (W = com.livescore.LeagueTableWidgetSettings.advancePhases[this.phr[2]], void 0 !== W && void 0 !== W.col && ($('[data-type="secondary-color"]', Da).addClass(sc), $('[data-type="tertiary-color"]', Da).addClass(W.col)), void 0 !== W && void 0 !== W.txt && (0 < pa.text().length ? pa.text(pa.text() + "/" + W.txt) : pa.text(W.txt))) : $('[data-type="tertiary-color"]', Da).remove();
        void 0 !== this.rnk && $('[data-type="rank"]', Da).text(this.rnk);
        void 0 !== this.Tnm && $('[data-type="name"]', Da).text(this.Tnm);
        void 0 !== this.pld && $('[data-type="goaldiff"]', Da).text(this.pld);
        if (void 0 !== this.per) {
          this.per = Math.round(1E3 * this.per) / 1E3;
          for (Za = "" + this.per; 5 > Za.length;) Za += "0";
          $('[data-type="points"]', Da).text(Za)
        } else void 0 !== this.pts && $('[data-type="points"]', Da).text(this.pts);
        wa.append(Da)
      });
      $('[data-type="team-data-tpl"]', aa).remove();
      E.append(aa)
    }
  }
  function m(N, Q) {
    var S = com.livescore.LeagueTableWidgetSettings.stageNames;
    if (void 0 === N) return "";
    if (void 0 !== Q && void 0 !== S[N.Ccd] && void 0 !== S[N.Ccd][N.Scd] && void 0 !== S[N.Ccd][N.Scd][Q]) return S[N.Ccd][N.Scd][Q];
    if (void 0 === N.Snm || null === N.Snm || 0 == N.Snm.length) return "";
    S = N.Snm;
    void 0 !== Q && null !== Q && 0 < Q.length && (S += " - " + Q);
    return S
  }
  function t() {
    var N = $('[data-name="' + R + '"]');
    1 >= D.length ? ($('[data-type="left-arrow"]').hide(), $('[data-type="right-arrow"]').hide(), $('[data-type="league-name"]').css("padding-left", "0")) : ($('[data-type="left-arrow"]').unbind().bind("click", function(S) {
      u(S, "left")
    }), $('[data-type="right-arrow"]').unbind().bind("click", function(S) {
      u(S, "right")
    }));
    if (null === R || 0 == N.length) {
      var Q = null === F || 0 == $('[data-name="' + F + '"]').length ? $('[data-type="league-table"]:first').attr("data-name") : F;
      N = $('[data-name="' + Q + '"]');
      R = Q
    }
    N.css("left", "0px");
    $("#leagueTableBodyContainer").height(N.height() + 4);
    N.show()
  }
  function u(N, Q) {
    N.preventDefault();
    if (1 < $('[data-type="league-table"]').length) {
      I = !0;
      var S = $("#leagueTableBodyContainer"),
          W = $('[data-type="league-table"]:visible', S);
      if ("right" === Q) {
        var aa = W.next('#leagueTableBodyContainer [data-type="league-table"]');
        0 == aa.length && (aa = $('[data-type="league-table"]:first', S))
      } else "left" === Q && (aa = W.prev('[data-type="league-table"]'), 0 == aa.length && (aa = $('[data-type="league-table"]:last', S)));
      B(W, aa, Q, H)
    }
  }
  function B(N, Q, S, W) {
    var aa = N.position().left,
        oa = N.height(),
        na = Q.height(),
        wa = 0 < $('[data-type="ad4"]:visible').length,
        mb = W.replace(/\//g, "_");
    R = Q.attr("data-name");
    !wa && na > oa && $("#leagueTableBodyContainer").height(na + 4);
    com.livescore.CookieHelper.setCookie({
      name: "lt" + mb,
      value: R,
      path: W
    });
    S = "right" == S ? 1 : -1;
    W = aa + S * N.width();
    Q.css("left", W + "px");
    Q.show();
    Q.animate({
      left: aa
    }, 200, "linear");
    N.animate({
      left: aa - S * N.width()
    }, 200, "linear", function() {
      $(this).hide();
      !wa && oa > na && $("#leagueTableBodyContainer").height(na + 4);
      I = !1
    });
    wa && $("#leagueTableBodyContainer").animate({
      height: na + 4
    }, 200, "linear")
  }
  var y, H, D, F, R = null,
      E, P, I = !1,
      O = !1,
      Z = null,
      da = 0;
  return {
    init: function(N, Q, S) {
      S = new Date;
      y = N;
      E = $("#leagueTableBodyContainer");
      P = $("#leagueTableBodyTemplate");
      S.setHours(S.getHours() - 1);
      y in com.livescore.LeagueTableWidgetSettings.sports && ("/" === Q || Q.match(/^(\/[^\/]+){1,2}\/$/i)) && (D = $('[data-type="league-table"]'), H = !Q || "/" == Q || -1 < location.pathname.indexOf("live") || -1 < location.pathname.indexOf("live-notifier") || null !== location.pathname.match(/[0-9]{4}\-[0-9]{2}\-[0-9]{2}/) ? "soccer" == y ? "/" : "/" + y : Q, N = H.replace(/\//g, "_"), F = com.livescore.CookieHelper.getCookie("lt" + N), t());
      document.cookie = "lt" + y + H + "=x;path=" + H + ";expires=" + S.toUTCString();
      document.cookie = "lt" + y + H + ";domain=." + location.hostname + "=x;path=" + H + ";expires=" + S.toUTCString();
      document.cookie = "lt" + y + H + ";domain=." + location.hostname + "=x;path=" + H + ";expires=" + S.toUTCString();
      document.cookie = "lt" + y + "/=x;path=/;expires=" + S.toUTCString();
      document.cookie = "lt" + y + "/;domain=." + location.hostname + "=x;path=/;expires=" + S.toUTCString();
      document.cookie = "lt" + y + "/;domain=." + location.hostname + "=x;path=/;expires=" + S.toUTCString();
      com.livescore.CookieHelper.setCookie({
        name: "lt" + y + H,
        value: "z",
        path: H,
        expiration: S
      })
    },
    startAutoRefresh: function() {
      com.livescore.NotificationService.onUpdate.bind(this, b)
    }
  }
}();
com.livescore.MatchListWidget = function(b, h) {
  this.sportCode = b;
  this.usesNewEndpoints = h;
  this.showsList = this.loaded = !1;
  this.stageTpl = $('[data-type="template"] [data-type="stg"]');
  this.matchTpl = $('[data-type="template"] > [data-type="evt"]');
  this.container = $('[data-type="container"]');
  this.sportsBar = this.counters = this.matchIds = null
};
com.livescore.MatchListWidget.prototype.init = function() {
  this.showsList = !0;
  this.sportsBar = $('[data-type="sports_bar"]');
  this.updateMatchIds(com.livescore.MatchService.getMyMatches().toArray());
  com.livescore.MatchService.setUseNewEndpoints(this.usesNewEndpoints);
  com.livescore.MatchService.onUpdate.bind(this, this.onMatchUpdate);
  com.livescore.MatchService.loadMyMatchesData(this.sportCode)
};
com.livescore.MatchListWidget.prototype.initStars = function() {
  var b = this;
  $("body").delegate('[data-type="evt"] [data-type="star"] i', "click", function(h) {
    h.preventDefault();
    h = $(this).closest('[data-type="evt"]');
    var f = h.attr("data-pid");
    var p = h.attr("data-eid");
    var n = h.attr("data-esd");
    var m = parseInt(h.attr("data-exd"), 10);
    void 0 !== f && void 0 !== p && void 0 !== n && (f = {
      Pid: f,
      Eid: p,
      Esd: n
    }, void 0 === m || isNaN(m) || (f.Exd = m), m = com.livescore.Match.init(b.sportCode, f), com.livescore.MatchService.processMatch(m) ? ($('[data-type="star"]', h).addClass("active"), void 0 !== b.counters && null !== b.counters && 0 <= b.counters[b.sportCode] && b.counters[b.sportCode]++) : ($('[data-type="star"]', h).removeClass("active"), void 0 !== b.counters && null !== b.counters && 0 < b.counters[b.sportCode] && b.counters[b.sportCode]--), b.drawSportsBar())
  });
  this.loaded || com.livescore.MatchService.onUpdate.bind(this, this.onMatchUpdate);
  b.drawSportsBar();
  b.drawStars()
};
com.livescore.MatchListWidget.prototype.onMatchUpdate = function(b) {
  switch (b.action) {
  case "localStorageUpdate":
    this.drawStars();
    this.showsList && (this.updateMatchIds(b.data), com.livescore.MatchService.loadMyMatchesData(this.sportCode, this.matchIds));
    this.drawSportsBar();
    break;
  case "matchDataReceived":
    this.draw(b.data, b.isCustomData)
  }
};
com.livescore.MatchListWidget.prototype.existsInMatchIds = function(b) {
  var h;
  if (null === this.matchIds || 0 == this.matchIds.length || void 0 === b || null === b || void 0 === b.providerId || void 0 === b.matchId) return !1;
  for (h = 0; h < this.matchIds.length; h++) {
    var f = this.matchIds[h];
    if (f.Pid == b.providerId && f.Eid == b.matchId) return !0
  }
  return !1
};
com.livescore.MatchListWidget.prototype.updateMatchIds = function(b) {
  var h = this,
      f = new Date,
      p, n;
  f.setUTCSeconds(f.getUTCSeconds() - com.livescore.MatchServiceSettings.finishedMyMatchExpiration);
  var m = 1E10 * f.getUTCFullYear() + 1E8 * (f.getUTCMonth() + 1) + 1E6 * f.getUTCDate() + 1E4 * f.getUTCHours() + 100 * f.getUTCMinutes() + f.getUTCSeconds();
  null === this.matchIds && (this.matchIds = []);
  this.counters = {};
  void 0 !== b && null !== b && 0 < b.length && $.each(b, function() {
    p = com.livescore.Match.addDurationToScheduledStart(this.scheduledStart, this.duration);
    n = p < m;
    void 0 === h.counters[this.sportCode] && (h.counters[this.sportCode] = 0);
    h.counters[this.sportCode]++;
    h.existsInMatchIds(this) || n ? n && com.livescore.MatchService.removeMatch(this) : h.matchIds.push({
      Pid: this.providerId,
      Eid: this.matchId
    })
  })
};
com.livescore.MatchListWidget.prototype.getExpiry = function(b) {
  b = b || new Date;
  b.setUTCSeconds(b.getUTCSeconds() - com.livescore.MatchServiceSettings.finishedMyMatchExpiration);
  return this.dateToUTCTimestamp(b)
};
com.livescore.MatchListWidget.prototype.dateToUTCTimestamp = function(b) {
  return 1E10 * b.getUTCFullYear() + 1E8 * (b.getUTCMonth() + 1) + 1E6 * b.getUTCDate() + 1E4 * b.getUTCHours() + 100 * b.getUTCMinutes() + b.getUTCSeconds()
};
com.livescore.MatchListWidget.prototype.draw = function(b) {
  var h = this,
      f = !this.loaded,
      p = new Date,
      n = this.getExpiry(p);
  f && this.container.hide();
  this.container.empty();
  $('[data-type="loader"]').fadeOut(function() {
    $.each(b, function() {
      h.drawStage(this, n, p)
    });
    f && h.container.fadeIn()
  });
  this.loaded || (this.loaded = !0, this.initStars())
};
com.livescore.MatchListWidget.prototype.drawStage = function(b, h, f) {
  var p = this,
      n, m;
  if (void 0 !== b.matches && 0 < b.matches.length) {
    if ("cricket" != this.sportCode) {
      var t = this.stageTpl.clone().addClass("mt4");
      $('[data-type="category"]', t).attr("href", "/" + this.sportCode + "/" + b.countryCode + "/");
      $('[data-type="category"] strong', t).text(b.countryName);
      $('[data-type="stage"]', t).attr("href", "/" + this.sportCode + "/" + b.countryCode + "/" + b.code + "/").text(b.name)
    }
    switch (this.sportCode) {
    case "soccer":
      var u = this.drawSoccerMatch;
      break;
    case "hockey":
      u = this.drawHockeyMatch;
      break;
    case "basketball":
      u = this.drawBasketballMatch;
      break;
    case "tennis":
      u = this.drawTennisMatch;
      break;
    case "cricket":
      u = this.drawCricketMatch
    }
    void 0 !== u && $.each(b.matches, function(B) {
      m = 0;
      $.each(this, function() {
        this.getScheduledStartWithDuration() >= h && (void 0 !== t && 0 == m && (0 < B && ($('[data-type="title"]', t).empty(), t.removeClass("mt4").addClass("btn")), n = p.startDateString(this), $('[data-type="date"]', t).text(null === n ? "" : n), p.container.append(t.clone())), "cricket" == p.sportCode ? u.call(p, this, b, m, f) : u.call(p, this, b, m, h), m++)
      })
    })
  }
};
com.livescore.MatchListWidget.prototype.drawSoccerMatch = function(b, h, f, p) {
  var n = this.matchTpl.clone();
  n.attr("data-pid", b.providerId).attr("data-eid", b.matchId).attr("data-esd", b.scheduledStart);
  0 == f % 2 && n.addClass("even");
  1 != b.overallStatusId && $('[data-type="min"] img', n).remove();
  0 == b.overallStatusId ? (f = this.startTimeString(b), $('[data-type="min"]', n).append(null === f ? b.overallStatus : f)) : $('[data-type="min"]', n).append((1 == b.overallStatusId ? " " : "") + b.overallStatus);
  void 0 !== b.homeTeam && 0 < b.homeTeam.length && $('[data-type="home-team"]', n).text(b.homeTeam[0].name);
  void 0 !== b.awayTeam && 0 < b.awayTeam.length && $('[data-type="away-team"]', n).text(b.awayTeam[0].name);
  if (b.shouldShowScore && void 0 !== b.homeTeam && 0 < b.homeTeam.length && void 0 !== b.awayTeam && 0 < b.awayTeam.length) {
    f = void 0 === b.homeScore || null === b.homeScore || 0 == b.homeScore.length ? "0" : b.homeScore;
    var m = void 0 === b.awayScore || null === b.awayScore || 0 == b.awayScore.length ? "0" : b.awayScore
  } else m = f = "?";
  if (b.shouldShowDetails) {
    var t = !0 === this.usesNewEndpoints && 8 === b.providerId ? b.matchId : b.providerId + "-" + b.matchId;
    b = "/" + this.sportCode + "/" + h.countryCode + "/" + h.code + "/" + b.homeTeam[0].code + "-vs-" + b.awayTeam[0].code + "/" + t + "/";
    $('[data-type="score"] [data-type="link"]', n).attr("href", b).text(f + " - " + m)
  } else $('[data-type="score"]', n).empty().text(f + " - " + m);
  this.drawStar(n, p);
  this.container.append(n)
};
com.livescore.MatchListWidget.prototype.drawHockeyMatch = function(b, h, f, p) {
  var n = this.matchTpl.clone();
  n.attr("data-pid", b.providerId).attr("data-eid", b.matchId).attr("data-esd", b.scheduledStart);
  b.shouldShowDetails && (h = "/" + this.sportCode + "/" + h.countryCode + "/" + h.code + "/" + b.homeTeam[0].code + "-vs-" + b.awayTeam[0].code + "/" + b.providerId + "-" + b.matchId + "/", $('[data-type="group"]', n).attr("data-href", h).addClass("hover-action scorelink"));
  0 == f % 2 && $('[data-type="row"]', n).addClass("even");
  1 != b.overallStatusId && $('[data-type="min"] img', n).remove();
  0 == b.overallStatusId ? (f = this.startTimeString(b), $('[data-type="min"]', n).append(null === f ? b.overallStatus : f)) : $('[data-type="min"]', n).append((1 == b.overallStatusId ? " " : "") + b.overallStatus);
  void 0 !== b.homeTeam && 0 < b.homeTeam.length && $('[data-type="home-team"]', n).html(1 == b.winner ? "<strong>" + b.homeTeam[0].name + "</strong>" : b.homeTeam[0].name);
  void 0 !== b.awayTeam && 0 < b.awayTeam.length && $('[data-type="away-team"]', n).html(2 == b.winner ? "<strong>" + b.awayTeam[0].name + "</strong>" : b.awayTeam[0].name);
  b.shouldShowScore && (b.shouldShowDetails ? ($('[data-type="home-score"] a', n).text(void 0 === b.homeScore || null === b.homeScore || 0 == b.homeScore.length ? "" : b.homeScore), $('[data-type="away-score"] a', n).text(void 0 === b.awayScore || null === b.awayScore || 0 == b.awayScore.length ? "" : b.awayScore)) : ($('[data-type="home-score"]', n).text(void 0 === b.homeScore || null === b.homeScore || 0 == b.homeScore.length ? "" : b.homeScore), $('[data-type="away-score"]', n).text(void 0 === b.awayScore || null === b.awayScore || 0 == b.awayScore.length ? "" : b.awayScore)), $('[data-type="home-p1"]', n).text(void 0 === b.homePeriod1Score || null === b.homePeriod1Score || 0 == b.homePeriod1Score.length ? "" : b.homePeriod1Score), $('[data-type="away-p1"]', n).text(void 0 === b.awayPeriod1Score || null === b.awayPeriod1Score || 0 == b.awayPeriod1Score.length ? "" : b.awayPeriod1Score), $('[data-type="home-p2"]', n).text(void 0 === b.homePeriod2Score || null === b.homePeriod2Score || 0 == b.homePeriod2Score.length ? "" : b.homePeriod2Score), $('[data-type="away-p2"]', n).text(void 0 === b.awayPeriod2Score || null === b.awayPeriod2Score || 0 == b.awayPeriod2Score.length ? "" : b.awayPeriod2Score), $('[data-type="home-p3"]', n).text(void 0 === b.homePeriod3Score || null === b.homePeriod3Score || 0 == b.homePeriod3Score.length ? "" : b.homePeriod3Score), $('[data-type="away-p3"]', n).text(void 0 === b.awayPeriod3Score || null === b.awayPeriod3Score || 0 == b.awayPeriod3Score.length ? "" : b.awayPeriod3Score), $('[data-type="home-ot"]', n).text(void 0 === b.homeExtraTimeScore || null === b.homeExtraTimeScore || 0 == b.homeExtraTimeScore.length ? "" : b.homeExtraTimeScore), $('[data-type="away-ot"]', n).text(void 0 === b.awayExtraTimeScore || null === b.awayExtraTimeScore || 0 == b.awayExtraTimeScore.length ? "" : b.awayExtraTimeScore), $('[data-type="home-ps"]', n).text(void 0 === b.homePenaltyScore || null === b.homePenaltyScore || 0 == b.homePenaltyScore.length ? "" : b.homePenaltyScore), $('[data-type="away-ps"]', n).text(void 0 === b.awayPenaltyScore || null === b.awayPenaltyScore || 0 == b.awayPenaltyScore.length ? "" : b.awayPenaltyScore));
  this.drawStar(n, p);
  this.container.append(n)
};
com.livescore.MatchListWidget.prototype.drawBasketballMatch = function(b, h, f, p) {
  h = this.matchTpl.clone();
  h.attr("data-pid", b.providerId).attr("data-eid", b.matchId).attr("data-esd", b.scheduledStart);
  0 == f % 2 && $('[data-type="row"]', h).addClass("even");
  1 != b.overallStatusId && $('[data-type="min"] img', h).remove();
  0 == b.overallStatusId ? (f = this.startTimeString(b), $('[data-type="min"]', h).append(null === f ? b.overallStatus : f)) : $('[data-type="min"]', h).append((1 == b.overallStatusId ? " " : "") + b.overallStatus);
  void 0 !== b.homeTeam && 0 < b.homeTeam.length && $('[data-type="home-team"]', h).html(1 == b.winner ? "<strong>" + b.homeTeam[0].name + "</strong>" : b.homeTeam[0].name);
  void 0 !== b.awayTeam && 0 < b.awayTeam.length && $('[data-type="away-team"]', h).html(2 == b.winner ? "<strong>" + b.awayTeam[0].name + "</strong>" : b.awayTeam[0].name);
  if (b.shouldShowScore) {
    var n = function(t) {
      return void 0 !== t && null !== t
    };
    var m = function(t) {
      return void 0 === t || null === t || 0 == t.length ? "" : t
    };
    f = !n(b.homeQuarter1Score) && (n(b.homePeriod1Score) || n(b.homePeriod2Score || n(b.homeHalfTimeScore)));
    $('[data-type="home-score"]', h).text(m(b.homeScore));
    f ? ($('[data-type="home-q1"]', h).text(m(b.homePeriod1Score)), $('[data-type="home-q2"]', h).text(m(b.homePeriod2Score))) : ($('[data-type="home-q1"]', h).text(m(b.homeQuarter1Score)), $('[data-type="home-q2"]', h).text(m(b.homeQuarter2Score)), $('[data-type="home-q3"]', h).text(m(b.homeQuarter3Score)), $('[data-type="home-q4"]', h).text(m(b.homeQuarter4Score)));
    $('[data-type="home-ot"]', h).text(m(b.homeExtraTimeScore));
    f = !n(b.awayQuarter1Score) && (n(b.awayPeriod1Score) || n(b.awayPeriod2Score || n(b.awayHalfTimeScore)));
    $('[data-type="away-score"]', h).text(m(b.awayScore));
    f ? ($('[data-type="away-q1"]', h).text(m(b.awayPeriod1Score)), $('[data-type="away-q2"]', h).text(m(b.awayPeriod2Score))) : ($('[data-type="away-q1"]', h).text(m(b.awayQuarter1Score)), $('[data-type="away-q2"]', h).text(m(b.awayQuarter2Score)), $('[data-type="away-q3"]', h).text(m(b.awayQuarter3Score)), $('[data-type="away-q4"]', h).text(m(b.awayQuarter4Score)));
    $('[data-type="away-ot"]', h).text(m(b.awayExtraTimeScore))
  }
  this.drawStar(h, p);
  this.container.append(h)
};
com.livescore.MatchListWidget.prototype.drawTennisMatch = function(b, h, f, p) {
  var n = this.matchTpl.clone(),
      m;
  h = void 0 !== b.homeTeam && null !== b.homeTeam && 1 < b.homeTeam.length || void 0 !== b.awayTeam && null !== b.awayTeam && 1 < b.awayTeam.length;
  n.attr("data-pid", b.providerId).attr("data-eid", b.matchId).attr("data-esd", b.scheduledStart);
  0 == f % 2 && $('[data-type="row"]', n).addClass("even");
  h && ($('[data-type="row"], [data-type="home-serve"], [data-type="away-serve"], [data-type="home-score"], [data-type="away-score"], [data-type="home-game"], [data-type="away-game"]', n).addClass("ln36"), $('[data-type="star"]', n).addClass("row-double"));
  1 != b.overallStatusId && $('[data-type="min"] img', n).remove();
  0 == b.overallStatusId ? (f = this.startTimeString(b), $('[data-type="min"]', n).append(null === f ? b.overallStatus : f)) : $('[data-type="min"]', n).append((1 == b.overallStatusId ? " " : "") + b.overallStatus);
  1 == b.serves ? $('[data-type="home-serve"] span', n).addClass("inc tennis-ball") : 2 == b.serves && $('[data-type="away-serve"] span', n).addClass("inc tennis-ball");
  f = function(t, u, B) {
    void 0 !== t && null !== t && 0 < t.length && (m = t[0].name, 1 < t.length && (m += "<br/>" + t[1].name), b.winner == u && (m = "<strong>" + m + "</strong>"), $('[data-type="' + B + '"]', n).html(m))
  };
  f(b.homeTeam, 1, "home-team");
  f(b.awayTeam, 2, "away-team");
  b.shouldShowScore && (f = function(t, u, B) {
    void 0 !== t && null !== t && $('[data-type="' + B + '"]', n).prepend(t);
    void 0 !== u && null !== u ? $('[data-type="' + B + '"] sup', n).text(u) : $('[data-type="' + B + '"] sup', n).remove()
  }, f(b.homeSet1Score, b.homeSet1TiebreakScore, "home-set1"), f(b.homeSet2Score, b.homeSet2TiebreakScore, "home-set2"), f(b.homeSet3Score, b.homeSet3TiebreakScore, "home-set3"), f(b.homeSet4Score, b.homeSet4TiebreakScore, "home-set4"), f(b.homeSet5Score, b.homeSet5TiebreakScore, "home-set5"), f(b.homeGameScore, null, "home-game"), f(b.awaySet1Score, b.awaySet1TiebreakScore, "away-set1"), f(b.awaySet2Score, b.awaySet2TiebreakScore, "away-set2"), f(b.awaySet3Score, b.awaySet3TiebreakScore, "away-set3"), f(b.awaySet4Score, b.awaySet4TiebreakScore, "away-set4"), f(b.awaySet5Score, b.awaySet5TiebreakScore, "away-set5"), f(b.awayGameScore, null, "away-game"));
  this.drawStar(n, p);
  this.container.append(n)
};
com.livescore.MatchListWidget.prototype.drawCricketMatch = function(b, h, f, p) {
  f = this.matchTpl.clone();
  var n = void 0 !== b.lastComment && null !== b.lastComment && 0 < b.lastComment.length,
      m = void 0 !== b.providerId && null !== b.providerId && void 0 !== b.matchId && null !== b.matchId;
  f.removeAttr("data-type");
  var t = $('[data-type="evt"]', f);
  t.attr("data-pid", b.providerId).attr("data-eid", b.matchId).attr("data-esd", b.scheduledStart);
  void 0 !== b.duration && t.attr("data-exd", b.duration);
  $('[data-type="category"]', f).attr("href", "/" + this.sportCode + "/" + h.countryCode + "/").text(h.countryName);
  $('[data-type="stage"]', f).attr("href", "/" + this.sportCode + "/" + h.countryCode + "/" + h.code + "/").text(h.name);
  $('[data-type="date"]', f).html(this.startDateString(b));
  var u = "";
  void 0 !== b.matchTypeDesc && null !== b.matchTypeDesc && (u += b.matchTypeDesc);
  void 0 !== b.matchPhaseDesc && null !== b.matchPhaseDesc && 0 < b.matchPhaseDesc.length && (u += (0 < u.length ? " " : "") + "(" + b.matchPhaseDesc + ")");
  $('[data-type="phase"]', f).text(u);
  1 != b.overallStatusId ? (u = void 0 !== b.overallStatusLong && null !== b.overallStatusLong && 0 < b.overallStatusLong.length ? b.overallStatusLong : b.overallStatus, $('[data-type="min"] img', f).remove(), 0 == b.overallStatusId ? (h = this.startTimeString(b), $('[data-type="min"]', f).append(null === h ? u : h)) : $('[data-type="min"]', f).append(u)) : $('[data-type="min"]', f).append(" Play in progress");
  void 0 !== b.homeTeam && 0 < b.homeTeam.length && $('[data-type="home-team"]', f).text(b.homeTeam[0].name);
  void 0 !== b.awayTeam && 0 < b.awayTeam.length && $('[data-type="away-team"]', f).text(b.awayTeam[0].name);
  1 == b.batting ? ($('[data-type="home-pos"]', f).addClass("ico bat"), $('[data-type="away-pos"]', f).addClass("ico ball")) : 2 == b.batting && ($('[data-type="home-pos"]', f).addClass("ico ball"), $('[data-type="away-pos"]', f).addClass("ico bat"));
  h = function(y, H, D, F) {
    u = "";
    void 0 !== y && null !== y && (u += y);
    void 0 !== H && null !== H && (u += (0 == u.length ? "0/" : "/") + H);
    0 < u.length && 1 == D && (u += "d");
    return !0 === F ? "<strong>" + u + "</strong>" : u
  };
  var B = function(y) {
    u = "";
    void 0 !== y && null !== y && (u += "( <strong>" + y + " overs</strong> )");
    return u
  };
  $('[data-type="home-i1"]', f).text(h(b.homeInning1Runs, b.homeInning1Wickets, b.homeInning1DeclaredClosed));
  $('[data-type="away-i1"]', f).text(h(b.awayInning1Runs, b.awayInning1Wickets, b.awayInning1DeclaredClosed));
  1 == b.duration ? ($('[data-type="home-i2"]', f).html(B(b.homeInning1Overs)), $('[data-type="away-i2"]', f).html(B(b.awayInning1Overs))) : ($('[data-type="home-i2"]', f).html(h(b.homeInning2Runs, b.homeInning2Wickets, b.homeInning2DeclaredClosed, !0)), $('[data-type="away-i2"]', f).html(h(b.awayInning2Runs, b.awayInning2Wickets, b.awayInning2DeclaredClosed, !0)));
  n || m ? (n && $('[data-type="last-com"]', f).text(b.lastComment), m ? $('[data-type="link"] a', f).attr("href", "/" + this.sportCode + "/match/" + (4 != b.providerId ? b.providerId + "-" : "") + b.matchId + "/") : $('[data-type="link"] a', f).remove()) : $('[data-type="bar"]', f).remove();
  1 < b.duration && p.setUTCHours(p.getUTCHours() - 24 * b.duration);
  this.drawStar(t, this.getExpiry(p));
  this.container.append(f.html())
};
com.livescore.MatchListWidget.prototype.drawSportsBar = function() {
  var b = this;
  void 0 !== this.sportsBar && null !== this.sportsBar && void 0 !== this.counters && null !== this.counters && (this.sportsBar.removeClass("hidden"), $.each(this.counters, function(h, f) {
    $('[data-sport="' + h + '"] span', b.sportsBar).text(f)
  }))
};
com.livescore.MatchListWidget.prototype.drawStars = function() {
  var b = this,
      h = this.getExpiry();
  $('[data-type="evt"]').each(function() {
    b.drawStar($(this), h)
  })
};
com.livescore.MatchListWidget.prototype.drawStar = function(b, h) {
  var f = b.attr("data-pid"),
      p = b.attr("data-eid"),
      n = b.attr("data-esd"),
      m = parseInt(b.attr("data-exd"), 10),
      t = $('[data-type="star"]', b);
  supports_html5_storage() && void 0 !== f && void 0 !== p && void 0 !== n && !0 !== com.livescore.ds && (f = {
    Pid: f,
    Eid: p,
    Esd: n
  }, void 0 === m || isNaN(m) || (f.Exd = m), m = com.livescore.Match.init(this.sportCode, f), m.getScheduledStartWithDuration() >= h ? (com.livescore.MatchService.isMyMatch(m) ? (com.livescore.MatchService.updateMatch(m), t.addClass("active")) : t.removeClass("active"), t.removeClass("hidden"), $("i", t).removeClass("hidden")) : ($("i", t).remove(), com.livescore.MatchService.removeMatch(m)))
};
com.livescore.MatchListWidget.prototype.startDateString = function(b) {
  var h = (new Date).getFullYear();
  if (void 0 === b || void 0 === b.scheduledStartDate || null === b.scheduledStartDate) return null;
  var f = "January February March April May June July August September October November December".split(" ");
  var p = b.scheduledStartDate.getFullYear();
  var n = b.scheduledStartDate.getMonth();
  var m = b.scheduledStartDate.getDate();
  var t = p == h ? f[n] + " " + m : f[n] + " " + m + ", " + p;
  if (void 0 !== b.duration && 1 < b.duration) {
    m = new Date(b.scheduledStartDate.getTime());
    m.setDate(m.getDate() + b.duration);
    p = m.getFullYear();
    n = m.getMonth();
    m = m.getDate();
    var u = p == h ? f[n] + " " + m : f[n] + " " + m + ", " + p
  }
  return t + (void 0 !== u ? " - " + u : "")
};
com.livescore.MatchListWidget.prototype.startTimeString = function(b) {
  if (void 0 === b || void 0 === b.scheduledStartDate || null === b.scheduledStartDate) return null;
  var h = b.scheduledStartDate.getHours();
  b = b.scheduledStartDate.getMinutes();
  return (10 > h ? "0" + h : h) + ":" + (10 > b ? "0" + b : b)
};
com.livescore.MatchListWidget.create = function(b, h) {
  var f = null;
  0 <= com.livescore.MatchListWidgetSettings.sports.indexOf(b) && (f = new com.livescore.MatchListWidget(b, h));
  return f
};
com.livescore.MatchListWidget.init = function(b, h) {
  var f = com.livescore.MatchListWidget.create(b, h);
  null !== f && f.init();
  return f
};
com.livescore.MatchListWidget.initStars = function(b, h) {
  var f = com.livescore.MatchListWidget.create(b, h);
  null !== f && f.initStars();
  return f
};
com.livescore.MatchDetailWidget = function(b) {
  this.sport = b;
  this.container = $('[data-type="odds_bnr"]');
  this.bannerContainer = $('[data-type="bnr"]');
  this.timedOut = !1;
  this.banner = this.odds = this.bannernitTimer = null
};
com.livescore.MatchDetailWidget.prototype.init = function() {
  var b = this,
      h = $("body");
  $(window).load(function() {
    livescore.resizematchdetailstable()
  });
  h.delegate('[data-type="star"] i', "click", function(f) {
    f.preventDefault();
    f = $(this).closest('[data-type="star"]');
    var p = f.attr("data-pid");
    var n = f.attr("data-eid");
    var m = f.attr("data-esd");
    void 0 !== p && void 0 !== n && void 0 !== m && (p = new com.livescore.Match(b.sport, {
      Pid: p,
      Eid: n,
      Esd: m
    }), com.livescore.MatchService.processMatch(p) ? f.addClass("active") : f.removeClass("active"))
  });
  h.delegate('[data-type="detail_tabs"] a', "click", function(f) {
    f.preventDefault();
    f = $(this);
    var p = f.attr("data-id"),
        n;
    void 0 !== p && (n = $('[data-type="tab"][data-id="' + p + '"]'));
    void 0 !== n && 0 < n.length && ($('[data-type="detail_tabs"] a').removeClass("selected"), $('[data-type="tab"]').addClass("hidden"), f.addClass("selected"), n.removeClass("hidden"), livescore.resizematchdetailstable())
  });
  h.delegate('[data-type="tab"][data-id="details"] [data-type="assists"]', "click", function(f) {
    f.preventDefault();
    f = $(this);
    var p = f.attr("data-text-open"),
        n = f.attr("data-text-closed");
    if (void 0 === p || null === p) p = "close";
    if (void 0 === n || null === n) n = "open";
    $('[data-type="tab"][data-id="details"] [data-type="details"]').toggleClass("hidden");
    f.toggleClass("selected");
    $("span", f).text(f.hasClass("selected") ? p : n);
    livescore.resizematchdetailstable()
  });
  h.delegate('[data-type="details_button"]', "click", function() {
    $('[data-type="details"]').toggleClass("hidden");
    $(this).hasClass("hockey") && ($('[data-type="details"]:first').hasClass("hidden") ? $(this).text("Show assists") : $(this).text("Hide assists"));
    $('[data-type="substitutions"]').addClass("hidden");
    $('[data-type="stats"]').addClass("hidden");
    livescore.resizematchdetailstable()
  });
  com.livescore.MatchService.onUpdate.bind(this, this.onMatchUpdate);
  b.draw()
};
com.livescore.MatchDetailWidget.prototype.onMatchUpdate = function() {
  this.draw()
};
com.livescore.MatchDetailWidget.prototype.draw = function() {
  var b = this,
      h = this.getExpiry();
  !0 !== com.livescore.ds && $('[data-type="star"]').each(function() {
    var f = $(this),
        p = f.attr("data-pid"),
        n = f.attr("data-eid"),
        m = f.attr("data-esd");
    supports_html5_storage() && void 0 !== p && void 0 !== n && void 0 !== m && (p = new com.livescore.Match(b.sport, {
      Pid: p,
      Eid: n,
      Esd: m
    }), 0 < f.length && p.scheduledStart >= h ? (com.livescore.MatchService.isMyMatch(p) ? f.addClass("active") : f.removeClass("active"), f.removeClass("hidden")) : com.livescore.MatchService.removeMatch(p))
  })
};
com.livescore.MatchDetailWidget.init = function(b) {
  var h = null;
  0 <= com.livescore.MatchListWidgetSettings.sports.indexOf(b) && (h = new com.livescore.MatchDetailWidget(b), h.init());
  return h
};
com.livescore.MatchDetailWidget.prototype.getExpiry = function(b) {
  b = b || new Date;
  b.setUTCSeconds(b.getUTCSeconds() - com.livescore.MatchServiceSettings.finishedMyMatchExpiration);
  return 1E10 * b.getUTCFullYear() + 1E8 * (b.getUTCMonth() + 1) + 1E6 * b.getUTCDate() + 1E4 * b.getUTCHours() + 100 * b.getUTCMinutes() + b.getUTCSeconds()
};
com.livescore.NotificationWidget = function(b, h) {
  this.sport = b;
  this.timezone = h;
  this.tpl = $('[data-type="ticker_tpl"]').clone().removeAttr("data-type");
  this.wrapper = $('[data-type="ticker_container_wrapper"]');
  this.containerLatest = $('[data-type="ticker_container_latest"]');
  this.container = $('[data-type="ticker_container"]');
  this.bannerContainer = $("#ticker_ad");
  this.aggregateContainers = $('[data-type="ticker_container_latest"], [data-type="ticker_container"]');
  this.loader = $('[data-type="loader"]');
  this.settingsButton =
  $('[data-type="ticker-settings-button"]');
  this.settingsBox = $('[data-type="ticker-settings"]');
  this.icons = com.livescore.NotificationWidgetSettings.icons;
  this.callStack = [];
  this.firstLoad = !0;
  this.lastRowEven = this.pageLoaded = this.rowSliding = !1;
  this.soundsEnabled = 2;
  this.notificationsEnabled = 0;
  this.sounds = {};
  this.geoAdsConfig = {
    loaded: !1
  };
  this.bannerLoaded = !1
};
com.livescore.NotificationWidget.prototype.init = function() {
  var b = this,
      h = $("body");
  com.livescore.JsonpService.onDataReceived.bind(this, this.jsonpUpdateReceived);
  this.suspendNotifications();
  this.loadNotifierBanner();
  this.initGeoAdsConfig();
  com.livescore.NotificationService.onUpdate.bind(this, this.onNotificationUpdate);
  com.livescore.MatchService.onUpdate.bind(this, this.onMatchUpdate);
  this.initSettings();
  $(window).load(function() {
    b.pageLoaded = !0;
    b.initialLoad()
  });
  window.setTimeout(function() {
    if (!1 === b.geoAdsConfig.loaded || !1 === b.pageLoaded || !1 === b.bannerLoaded) b.geoAdsConfig.loaded = !0, b.pageLoaded = !0, b.notifierBannerFailed(), b.initialLoad()
  }, com.livescore.NotificationWidgetSettings.initialAnimationMaxDelay);
  $('[data-type="ticker_container_latest"], [data-type="ticker_container"]').delegate('[data-type="bet-button"] span', "click", function(f) {
    var p = $(this).attr("data-href");
    f.preventDefault();
    f.stopPropagation();
    void 0 !== p && 0 < p.length && "#" !== p && (f = window.open(p, "_blank"), null !== f && f.focus())
  });
  h.delegate('[data-type="star"] i', "click", function(f) {
    f.preventDefault();
    var p = $(this).closest('[data-type="item"]');
    f = p.attr("data-match-id");
    p = p.attr("data-esd");
    var n = b.splitCompositeId(f);
    void 0 !== n.pid && void 0 !== n.eid && void 0 !== p && (p = new com.livescore.Match(b.sport, {
      Pid: n.pid,
      Eid: n.eid,
      Esd: p
    }), com.livescore.MatchService.processMatch(p) ? $('[data-match-id="' + f + '"] [data-type="star"]', b.aggregateContainers).addClass("active") : $('[data-match-id="' + f + '"] [data-type="star"]', b.aggregateContainers).removeClass("active"))
  })
};
com.livescore.NotificationWidget.prototype.jsonpUpdateReceived = function(b) {
  var h = com.livescore.NotificationWidgetSettings.betButtonConfig;
  void 0 !== b && "process" === b.id && void 0 !== b.data && void 0 !== b.data.id && (b.data.id.site == h.site && b.data.id.pos == h.pos ? this.geoAdsConfigReceived(b) : (h = this.bannerContainer.attr("data-src"), void 0 !== h && null !== h && 0 <= h.indexOf("site=" + b.data.id.site + "&pos=" + b.data.id.pos) && this.notifierBannerReceived(b)))
};
com.livescore.NotificationWidget.prototype.initGeoAdsConfig = function() {
  com.livescore.NotificationWidgetSettings.geoAdsConfigEnabled ? this.loadGeoAdsConfig() : this.geoAdsConfig.loaded = !0
};
com.livescore.NotificationWidget.prototype.loadGeoAdsConfig = function() {
  var b = this,
      h = com.livescore.NotificationWidgetSettings.betButtonConfig;
  b.geoAdsConfig.loaded = !1;
  com.livescore.JsonpService.sendRequest(h.url, "process", com.livescore.NotificationWidgetSettings.geoAdsConfigRequestTimeout, {
    site: h.site,
    pos: h.pos
  });
  0 < com.livescore.NotificationWidgetSettings.geoAdsConfigRefreshPeriod && window.setTimeout(function() {
    b.loadGeoAdsConfig()
  }, com.livescore.NotificationWidgetSettings.geoAdsConfigRefreshPeriod)
};
com.livescore.NotificationWidget.prototype.geoAdsConfigReceived = function(b) {
  if (void 0 !== b && "process" === b.id && void 0 !== b.data && void 0 !== b.data.data && !this.geoAdsConfig.loaded) {
    var h = $("<div></div>");
    h.css({
      width: "1px",
      height: "1px",
      position: "absolute",
      left: "-100px",
      top: "-100px",
      visibility: "hidden"
    });
    $("body").append(h);
    h.html(b.data.data);
    this.geoAdsConfig.loaded = !0;
    this.geoAdsConfig.data = h.text();
    h.remove();
    this.initialLoad()
  }
};
com.livescore.NotificationWidget.prototype.loadNotifierBanner = function() {
  if (0 < this.bannerContainer.length) {
    var b = this.bannerContainer.attr("data-src");
    void 0 !== b && null !== b && 0 < b.length && (b += "&jsonp=1");
    com.livescore.JsonpService.sendRequest(b, "process")
  } else this.bannerLoaded = !0
};
com.livescore.NotificationWidget.prototype.notifierBannerReceived = function(b) {
  !1 === this.bannerLoaded && void 0 !== b.data && void 0 !== b.data.id && void 0 !== b.data.id.site && void 0 !== b.data.id.pos && void 0 !== b.data.id.sport && (this.bannerLoaded = !0, this.bannerContainer.attr("src", "/").attr("data-type", "bnr"), this.bannerContainer.parent(".hidden").removeClass("hidden"), this.containerLatest.parent(".hidden").removeClass("hidden"), com.livescore.AdWidget.updateBanners(), this.initialLoad())
};
com.livescore.NotificationWidget.prototype.notifierBannerFailed = function() {
  !1 === this.bannerLoaded && (this.bannerLoaded = !0, this.bannerContainer.parent(".hidden").remove(), this.containerLatest.parent(".hidden").remove(), this.containerLatest = $(this.containerLatest.selector))
};
com.livescore.NotificationWidget.prototype.initialLoad = function() {
  !0 === this.pageLoaded && !0 === this.geoAdsConfig.loaded && !0 === this.bannerLoaded && this.resumeNotifications()
};
com.livescore.NotificationWidget.prototype.onNotificationUpdate = function(b) {
  switch (b.action) {
  case "update":
    if (void 0 !== b.updatedItems) {
      var h = b.updatedItems.add || [];
      b = b.updatedItems.remove || [];
      (0 < h.length || 0 < b.length || this.firstLoad) && this.drawNotifications(h, b);
      this.firstLoad && (this.firstLoad = !1)
    }
  }
};
com.livescore.NotificationWidget.prototype.onMatchUpdate = function() {
  var b, h, f = this,
      p;
  $('[data-type="item"]', this.aggregateContainers).each(function() {
    b = $(this).attr("data-match-id");
    h = f.splitCompositeId(b);
    void 0 !== h.pid && void 0 !== h.eid && (p = new com.livescore.Match(f.sport, {
      Pid: h.pid,
      Eid: h.eid
    }), com.livescore.MatchService.isMyMatch(p) ? $('[data-match-id="' + b + '"] [data-type="star"]', f.aggregateContainers).addClass("active") : $('[data-match-id="' + b + '"] [data-type="star"]', f.aggregateContainers).removeClass("active"))
  })
};
com.livescore.NotificationWidget.prototype.splitCompositeId = function(b) {
  var h = {};
  if (void 0 !== b && null !== b) {
    var f = b.indexOf("-");
    0 < f && b.length > f + 1 && (h.pid = b.substring(0, f), h.eid = b.substring(f + 1))
  }
  return h
};
com.livescore.NotificationWidget.prototype.initSettings = function() {
  var b = livescore.browser({
    versionie: !0
  }),
      h = this;
  if (supports_html5_storage()) {
    var f = parseInt(localStorage.notifications_enabled, 10);
    isNaN(f) ? localStorage.notifications_enabled = this.notificationsEnabled : this.notificationsEnabled = f;
    f = parseInt(localStorage.sounds_enabled, 10);
    !isNaN(f) && 0 <= f && 2 >= f ? this.soundsEnabled = f : localStorage.sounds_enabled = this.soundsEnabled;
    var p = function() {
      var m = $('[name="alert-setting"]:checked', h.settingsBox).val();
      var t = h.notificationsEnabled != m;
      h.settingsBox.addClass("hidden");
      h.notificationsEnabled = m;
      h.soundsEnabled = $('[name="sound-setting"]:checked', h.settingsBox).val();
      localStorage.notifications_enabled = h.notificationsEnabled;
      localStorage.sounds_enabled = h.soundsEnabled;
      t && (t = {
        fn: h.redrawNotifications,
        addNotifications: com.livescore.NotificationService.allNotifications(),
        draw: h.getDraw()
      }, h.callStack.push(t), !1 === h.rowSliding && 1 >= h.callStack.length && h.executeCallStack())
    };
    var n = function() {
      h.settingsBox.addClass("hidden");
      $('input[type="radio"]', h.settingsBox).removeAttr("checked");
      $('input[name="alert-setting"][value="' + h.notificationsEnabled + '"]', h.settingsBox).prop("checked", !0);
      $('input[name="sound-setting"][value="' + h.soundsEnabled + '"]', h.settingsBox).prop("checked", !0)
    };
    n();
    this.settingsButton.click(function(m) {
      m.preventDefault();
      m.stopPropagation();
      h.settingsBox.toggleClass("hidden")
    });
    this.settingsBox.click(function(m) {
      m.stopPropagation()
    });
    this.settingsBox.delegate('[data-type="ticker-settings-apply"]', "click", function() {
      p()
    });
    this.settingsBox.delegate('[data-type="ticker-settings-cancel"]', "click", function() {
      n()
    });
    $("html").click(function() {
      h.settingsBox.is(":visible") && n()
    });
    "IE" != b && "IE7" != b && "IE8" != b ? (ion.sound({
      sounds: [{
        name: "goal"
      }, {
        name: "red_card"
      }, {
        name: "half_time"
      }, {
        name: "full_time"
      }],
      volume: .7,
      path: "/assets/sounds/",
      preload: !0
    }), $('[data-type="sound-settings"]', this.settingsBox).removeClass("hidden")) : this.soundsEnabled = 0;
    this.settingsButton.removeClass("hidden")
  }
};
com.livescore.NotificationWidget.prototype.drawNotifications = function(b, h) {
  var f = this.getDraw(),
      p = b.length,
      n = h.length > p ? h.length : p,
      m;
  if (!0 === this.firstLoad) {
    var t = {
      fn: this.initialDrawNotifications,
      addNotifications: b,
      draw: f
    };
    this.callStack.push(t)
  } else
  for (m = 0; m < n; m++) {
    t = m < p && (1 != this.notificationsEnabled || com.livescore.MatchService.isMyMatch(com.livescore.Match.fromNotification(b[m], this.sport))) ? b[m] : null;
    var u = m < h.length ? h[m] : null;
    t = null !== t && "mdt" == t.type ? {
      fn: this.drawIncident,
      add: t,
      remove: u
    } : {
      fn: f,
      add: t,
      remove: u
    };
    this.callStack.push(t)
  }!1 === this.rowSliding && this.executeCallStack()
};
com.livescore.NotificationWidget.prototype.getDraw = function() {
  switch (this.sport) {
  case "soccer":
    return this.drawSoccerNotification;
  case "hockey":
    return this.drawHockeyNotification;
  case "basketball":
    return this.drawBasketballNotification;
  case "tennis":
    return this.drawTennisNotification;
  case "cricket":
    return this.drawCricketNotification
  }
  return null
};
com.livescore.NotificationWidget.prototype.initialDrawNotifications = function(b, h) {
  var f, p, n = this,
      m;
  this.loader.fadeOut(function() {
    m = n.populateNotifications(b, h);
    0 < m && (n.container.hide(), n.containerLatest.hide(), 0 < n.containerLatest.length && m > com.livescore.NotificationWidgetSettings.latestMaxItems ? (p = Math.round(com.livescore.NotificationWidgetSettings.initialAnimationDuration / m * com.livescore.NotificationWidgetSettings.latestMaxItems), f = com.livescore.NotificationWidgetSettings.initialAnimationDuration - p) : p = f = com.livescore.NotificationWidgetSettings.initialAnimationDuration, n.animateSlideDown(n.container, f, function() {
      0 < n.containerLatest.length && n.animateSlideDown(n.containerLatest, p)
    }));
    n.executeCallStack()
  })
};
com.livescore.NotificationWidget.prototype.redrawNotifications = function(b, h) {
  var f = this,
      p = $('[data-type="ticker_container_latest"], [data-type="ticker_container"]');
  p.fadeOut(200, function() {
    f.container.empty();
    f.containerLatest.empty();
    f.populateNotifications(b, h);
    f.executeCallStack();
    p.fadeIn(200, function() {
      f.executeCallStack()
    })
  })
};
com.livescore.NotificationWidget.prototype.populateNotifications = function(b, h) {
  var f = [],
      p = [],
      n = [],
      m = new Date,
      t = m.getTime(),
      u = this,
      B;
  m.setUTCSeconds(m.getUTCSeconds() - com.livescore.MatchServiceSettings.finishedMyMatchExpiration);
  "cricket" == this.sportCode && m.setUTCHours(data.getUTCHours() - 120);
  var y = 1E10 * m.getUTCFullYear() + 1E8 * (m.getUTCMonth() + 1) + 1E6 * m.getUTCDate() + 1E4 * m.getUTCHours() + 100 * m.getUTCMinutes() + m.getUTCSeconds();
  $.each(b, function() {
    "mdt" == this.type ? p.push(this) : 1 == u.notificationsEnabled && this.scheduledStart < y && void 0 !== this.providerId && void 0 !== this.matchId ? n.push(this.compositeMatchId) : (1 != u.notificationsEnabled || com.livescore.MatchService.isMyMatch(com.livescore.Match.fromNotification(this, u.sport))) && f.push(this)
  });
  if (0 < n.length) {
    var H = [];
    $.each(f, function() {
      0 > n.indexOf(this.compositeMatchId) && H.push(this)
    });
    f = H
  }
  $.each(f, function(D) {
    var F = h.call(u, this);
    com.livescore.NotificationUtils.apiTimestampToDate(this.timestamp).getTime() > t - com.livescore.NotificationWidgetSettings.highlightedNotificationMaxAge && u.highlight(F);
    0 == u.containerLatest.length || D < f.length - com.livescore.NotificationWidgetSettings.latestMaxItems ? u.container.prepend(F) : u.containerLatest.prepend(F);
    u.lastRowEven = !u.lastRowEven;
    B = this.scheduledStart < y;
    null !== F && u.drawStar(this, B)
  });
  $.each(p, function() {
    u.drawIncident(this, !0)
  });
  return f.length
};
com.livescore.NotificationWidget.prototype.animateSlideDown = function(b, h, f) {
  function p() {
    0 <= B + u ? (b.css("top", "0px"), b.css("position", ""), n.css("height", ""), f && f()) : (B += u, m += u, b.css("top", B + "px"), n.height(m), window.setTimeout(p, 30));
    com.livescore.AdWidget.updateStickyBannerPos()
  }
  var n = b.parent(),
      m = 0;
  n.height(m);
  b.show();
  var t = b.height();
  var u = Math.round(t / (h / 30));
  var B = -t;
  b.css("position", "relative");
  b.css("top", B + "px");
  window.setTimeout(p, 30)
};
com.livescore.NotificationWidget.prototype.highlight = function(b) {
  var h = $('[data-type="wrapper"]', b),
      f = $('[data-type="score"]', h);
  h.css("background-color", "#FEF3BE");
  b.hasClass("row-group") || f.css("background-color", "#FEF3BE");
  window.setTimeout(function() {
    h.animate({
      backgroundColor: "transparent"
    }, com.livescore.NotificationWidgetSettings.highlightFadeOutDuration);
    b.hasClass("row-group") || f.animate({
      backgroundColor: "transparent"
    }, com.livescore.NotificationWidgetSettings.highlightFadeOutDuration)
  }, com.livescore.NotificationWidgetSettings.highlightDuration)
};
com.livescore.NotificationWidget.prototype.highlightScore = function(b) {
  b.css("background-color", "#FEF3BE");
  window.setTimeout(function() {
    b.animate({
      backgroundColor: "transparent"
    }, com.livescore.NotificationWidgetSettings.highlightFadeOutDuration)
  }, com.livescore.NotificationWidgetSettings.highlightDuration)
};
com.livescore.NotificationWidget.prototype.resumeHighlight = function(b) {
  var h = $('[data-type="wrapper"]', b),
      f = $('[data-type="score"]', h),
      p = com.livescore.NotificationWidgetSettings.highlightFadeOutDuration;
  "transparent" != h.css("background-color") && h.animate({
    backgroundColor: "transparent"
  }, p);
  b.hasClass("row-group") || "transparent" == f.css("background-color") || f.animate({
    backgroundColor: "transparent"
  }, p)
};
com.livescore.NotificationWidget.prototype.executeCallStack = function() {
  if (!1 === this.notificationsSuspended && 0 < this.callStack.length) {
    var b = this.callStack.shift();
    void 0 === b.fn || void 0 === b.add && void 0 === b.remove ? void 0 !== b.fn && void 0 !== b.addNotifications && void 0 !== b.draw ? b.fn.call(this, b.addNotifications, b.draw) : 0 < this.callStack.length && this.executeCallStack() : this.drawNotification(b.fn, b.add, b.remove)
  }
};
com.livescore.NotificationWidget.prototype.drawNotification = function(b, h, f) {
  var p = this,
      n = null === h,
      m = null === f;
  this.rowSliding = !0;
  if (n && m) this.executeCallStack();
  else {
    if (null !== h) if (b = b.call(this, h), "mdt" != h.type) {
      b.hide();
      this.highlight(b);
      if (0 < this.containerLatest.length) {
        if ($('[data-type="item"]', this.containerLatest).length >= com.livescore.NotificationWidgetSettings.latestMaxItems) {
          var t = $('[data-type="item"]:last', this.containerLatest);
          var u = t.clone();
          u.hide();
          t.slideUp({
            step: function() {
              com.livescore.AdWidget.updateStickyBannerPos()
            },
            complete: function() {
              t.remove()
            }
          });
          this.container.prepend(u);
          u.slideDown({
            step: function() {
              com.livescore.AdWidget.updateStickyBannerPos()
            }
          });
          this.resumeHighlight(u)
        }
        this.containerLatest.prepend(b)
      } else this.container.prepend(b);
      this.drawStar(h);
      b.slideDown({
        step: function() {
          com.livescore.AdWidget.updateStickyBannerPos()
        },
        complete: function() {
          n = !0;
          m && (p.rowSliding = !1, p.executeCallStack())
        }
      });
      this.lastRowEven = !this.lastRowEven;
      this.playSoundForNotification(h)
    } else n = !0, m && (this.rowSliding = !1, this.executeCallStack());
    if (null !== f) {
      var B = $('[data-id="' + f.compositeId + '"]', this.container);
      0 == B.length ? (m = !0, n && (this.rowSliding = !1, this.executeCallStack())) : B.slideUp({
        step: function() {
          com.livescore.AdWidget.updateStickyBannerPos()
        },
        complete: function() {
          B.remove();
          m = !0;
          n && (p.rowSliding = !1, p.executeCallStack())
        }
      })
    }
  }
};
com.livescore.NotificationWidget.prototype.drawSoccerNotification = function(b) {
  var h = this.tpl.clone();
  switch (b.type) {
  case "sc":
    $('[data-type="icon"]', h).addClass("goal");
    break;
  case "rc":
    var f = void 0 !== this.icons[b.sportId] ? this.icons[b.sportId][b.incident.incidentType] || "empty" : "empty";
    $('[data-type="icon"]', h).addClass(f);
    break;
  default:
    $('[data-type="icon"]', h).remove(), void 0 !== b.overallStatus && $('[data-type="status"]', h).html(b.overallStatus)
  }
  void 0 !== b.homeTeam && $('[data-type="home-team"]', h).html(this.teamToString(b.homeTeam));
  void 0 !== b.awayTeam && $('[data-type="away-team"]', h).html(this.teamToString(b.awayTeam));
  f = $('[data-type="score"] [data-type="link"]', h);
  void 0 !== b.homeScore && void 0 !== b.awayScore ? (void 0 !== b.homePenaltyScore && void 0 !== b.awayPenaltyScore ? ($('[data-type="home-sup"]', f).html(b.homePenaltyScore), $('[data-type="away-sup"]', f).html(b.awayPenaltyScore)) : ($('[data-type="home-sup"]', f).remove(), $('[data-type="away-sup"]', f).remove()), $('[data-type="home-score"]', f).html(b.homeScore), $('[data-type="away-score"]', f).html(b.awayScore)) : f.html("v");
  if (void 0 !== b.category && void 0 !== b.stage && void 0 !== b.teamCode && b.hasDetails) {
    var p = void 0 !== com.livescore.NotificationWidgetSettings.events.soccer && void 0 !== com.livescore.NotificationWidgetSettings.events.soccer[b.category] ? "/" + com.livescore.NotificationWidgetSettings.events.soccer[b.category] + "/" : "/soccer/" + b.category + "/";
    f.attr("href", p + b.stage + "/" + b.teamCode + "/" + b.providerId + "-" + b.matchId + "/")
  } else p = f.html(), f.remove(), $('[data-type="score"]', h).html(p);
  (void 0 !== b.scorerPosition && 0 <= b.scorerPosition.indexOf(1) || void 0 !== b.incident && 1 == b.incident.teamNumber) && $('[data-type="home-team"]', h).addClass("scored");
  (void 0 !== b.scorerPosition && 0 <= b.scorerPosition.indexOf(2) || void 0 !== b.incident && 2 == b.incident.teamNumber) && $('[data-type="away-team"]', h).addClass("scored");
  $('[data-type="item"]', h).attr("data-id", b.compositeId);
  $('[data-type="item"]', h).attr("data-match-id", b.providerId + "-" + b.matchId);
  $('[data-type="item"]', h).attr("data-esd", b.scheduledStart);
  void 0 !== b.overallStatusId && null !== b.overallStatusId && 0 < b.overallStatusId && $('[data-type="item"]', h).attr("data-epr", b.overallStatusId);
  b.isCorrection() && $('[data-type="item"]', h).addClass("correction");
  this.lastRowEven || $('[data-type="item"]', h).addClass("even");
  this.drawBetButton($('[data-type="item"]', h));
  return $(h.html())
};
com.livescore.NotificationWidget.prototype.drawHockeyNotification = function(b) {
  var h = this.tpl.clone();
  switch (b.type) {
  case "sc":
    $('[data-type="icon"]', h).addClass("goal-hockey");
    break;
  default:
    $('[data-type="icon"]', h).remove(), void 0 !== b.overallStatus && $('[data-type="status"]', h).html(b.overallStatus)
  }
  void 0 !== b.homeTeam && $('[data-type="home-team"]', h).html(this.teamToString(b.homeTeam));
  void 0 !== b.awayTeam && $('[data-type="away-team"]', h).html(this.teamToString(b.awayTeam));
  var f = $('[data-type="score"] [data-type="link"]', h);
  void 0 !== b.homeScore && void 0 !== b.awayScore ? (void 0 !== b.homePenaltyScore && void 0 !== b.awayPenaltyScore ? ($('[data-type="home-sup"]', f).html(b.homePenaltyScore), $('[data-type="away-sup"]', f).html(b.awayPenaltyScore)) : ($('[data-type="home-sup"]', f).remove(), $('[data-type="away-sup"]', f).remove()), $('[data-type="home-score"]', f).html(b.homeScore), $('[data-type="away-score"]', f).html(b.awayScore)) : f.html("v");
  if (void 0 !== b.category && void 0 !== b.stage && void 0 !== b.teamCode && b.hasDetails) f.attr("href", "/hockey/" + b.category + "/" + b.stage + "/" + b.teamCode + "/" + b.providerId + "-" + b.matchId + "/");
  else {
    var p = f.html();
    f.remove();
    $('[data-type="score"]', h).html(p)
  }
  void 0 !== b.scorerPosition && 0 <= b.scorerPosition.indexOf(1) && $('[data-type="home-team"]', h).addClass("scored");
  void 0 !== b.scorerPosition && 0 <= b.scorerPosition.indexOf(2) && $('[data-type="away-team"]', h).addClass("scored");
  $('[data-type="item"]', h).attr("data-id", b.compositeId);
  $('[data-type="item"]', h).attr("data-match-id", b.providerId + "-" + b.matchId);
  $('[data-type="item"]', h).attr("data-esd", b.scheduledStart);
  void 0 !== b.overallStatusId && null !== b.overallStatusId && 0 < b.overallStatusId && $('[data-type="item"]', h).attr("data-epr", b.overallStatusId);
  b.isCorrection() && $('[data-type="item"]', h).addClass("correction");
  this.lastRowEven || $('[data-type="item"]', h).addClass("even");
  this.drawBetButton($('[data-type="item"]', h));
  return $(h.html())
};
com.livescore.NotificationWidget.prototype.drawBasketballNotification = function(b) {
  var h = this.tpl.clone();
  void 0 !== b.overallStatus && $('[data-type="status"]', h).html(b.overallStatus);
  void 0 !== b.homeTeam && $('[data-type="home-team"]', h).html(this.teamToString(b.homeTeam));
  void 0 !== b.awayTeam && $('[data-type="away-team"]', h).html(this.teamToString(b.awayTeam));
  void 0 !== b.homeScore && void 0 !== b.awayScore ? ($('[data-type="score"] [data-type="home-score"]', h).html(b.homeScore), $('[data-type="score"] [data-type="away-score"]', h).html(b.awayScore)) : $('[data-type="score"]', h).html("v");
  void 0 !== b.scorerPosition && 0 <= b.scorerPosition.indexOf(1) && $('[data-type="home-team"]', h).addClass("scored");
  void 0 !== b.scorerPosition && 0 <= b.scorerPosition.indexOf(2) && $('[data-type="away-team"]', h).addClass("scored");
  $('[data-type="item"]', h).attr("data-id", b.compositeId);
  $('[data-type="item"]', h).attr("data-match-id", b.providerId + "-" + b.matchId);
  $('[data-type="item"]', h).attr("data-esd", b.scheduledStart);
  void 0 !== b.overallStatusId && null !== b.overallStatusId && 0 < b.overallStatusId && $('[data-type="item"]', h).attr("data-epr", b.overallStatusId);
  b.isCorrection() && $('[data-type="item"]', h).addClass("correction");
  this.lastRowEven || $('[data-type="item"]', h).addClass("even");
  this.drawBetButton($('[data-type="item"]', h));
  return $(h.html())
};
com.livescore.NotificationWidget.prototype.drawTennisNotification = function(b) {
  var h = this.tpl.clone(),
      f = $('[data-type="home"]', h),
      p = $('[data-type="away"]', h);
  void 0 !== b.overallStatus && $('[data-type="status"]', f).html(b.overallStatus);
  void 0 !== b.homeTeam && $('[data-type="teams"]', f).html(this.tennisTeamToString(b.homeTeam));
  void 0 !== b.homeScore && $('[data-type="score"]', f).html("(" + b.homeScore + ")");
  void 0 !== b.homeSetScore && $('[data-type="set-score"]', f).prepend(b.homeSetScore);
  void 0 !== b.homeTiebreakScore && $('[data-type="set-score"] sup', f).prepend(b.homeTiebreakScore);
  void 0 !== b.awayTeam && $('[data-type="teams"]', p).html(this.tennisTeamToString(b.awayTeam));
  void 0 !== b.awayScore && $('[data-type="score"]', p).html("(" + b.awayScore + ")");
  void 0 !== b.awaySetScore && $('[data-type="set-score"]', p).prepend(b.awaySetScore);
  void 0 !== b.awayTiebreakScore && $('[data-type="set-score"] sup', p).prepend(b.awayTiebreakScore);
  void 0 !== b.scorerPosition && (0 <= b.scorerPosition.indexOf(1) && f.addClass("scored"), 0 <= b.scorerPosition.indexOf(2) && p.addClass("scored"));
  $('[data-type="item"]', h).attr("data-id", b.compositeId);
  $('[data-type="item"]', h).attr("data-match-id", b.providerId + "-" + b.matchId);
  $('[data-type="item"]', h).attr("data-esd", b.scheduledStart);
  void 0 !== b.overallStatusId && null !== b.overallStatusId && 0 < b.overallStatusId && $('[data-type="item"]', h).attr("data-epr", b.overallStatusId);
  b.isCorrection() && $('[data-type="item"]', h).addClass("correction");
  this.lastRowEven || $('[data-type="row_group"]', h).addClass("even");
  this.drawBetButton($('[data-type="item"]', h));
  return $(h.html())
};
com.livescore.NotificationWidget.prototype.drawCricketNotification = function(b) {
  var h = this.tpl.clone(),
      f = [];
  2 == b.overallStatus && void 0 !== b.lastComment && 0 < b.lastComment.length ? $('[data-type="status"]', h).html(b.lastComment) : void 0 !== b.overallStatus && $('[data-type="status"]', h).html(b.overallStatus);
  void 0 !== b.homeTeam && $('[data-type="home"]', h).html(this.teamToString(b.homeTeam));
  if (void 0 !== b.homeScore1 || void 0 !== b.homeWicketScore1) {
    var p = void 0 !== b.homeScore1 ? b.homeScore1 : 0;
    var n = void 0 !== b.homeWicketScore1 ? b.homeWicketScore1 : 0;
    $('[data-type="sco-home"]', h).html(p + "/" + n)
  }
  if (void 0 !== b.homeScore2 || void 0 !== b.homeWicketScore2) p = void 0 !== b.homeScore2 ? b.homeScore2 : 0, n = void 0 !== b.homeWicketScore2 ? b.homeWicketScore2 : 0, $('[data-type="sco-home"]', h).html(p + "/" + n);
  void 0 !== b.awayTeam && $('[data-type="away"]', h).html(this.teamToString(b.awayTeam));
  if (void 0 !== b.awayScore1 || void 0 !== b.awayWicketScore1) p = void 0 !== b.awayScore1 ? b.awayScore1 : 0, n = void 0 !== b.awayWicketScore1 ? b.awayWicketScore1 : 0, $('[data-type="sco-away"]', h).html(p + "/" + n);
  if (void 0 !== b.awayScore2 || void 0 !== b.awayWicketScore2) p = void 0 !== b.awayScore2 ? b.awayScore2 : 0, n = void 0 !== b.awayWicketScore2 ? b.awayWicketScore2 : 0, $('[data-type="sco-away"]', h).html(p + "/" + n);
  2 != b.overallStatusId || 1 != b.winner && 2 != b.winner ? void 0 !== b.scorerPosition ? f = b.scorerPosition : void 0 !== b.wicketScorerPos && (f = b.wicketScorerPos) : f.push(b.winner);
  p = $('[data-type="link"]', h);
  4 == b.providerId && void 0 !== b.matchId ? p.attr("href", "/cricket/match/" + b.matchId + "/") : void 0 !== b.providerId && void 0 !== b.matchId ? p.attr("href", "/cricket/match/" + b.providerId + "-" + b.matchId + "/") : (n = p.parent(), n.html(p.html()));
  0 <= f.indexOf(1) && ($('[data-type="home"]', h).addClass("scored"), $('[data-type="sco-home"]', h).addClass("scored"));
  0 <= f.indexOf(2) && ($('[data-type="away"]', h).addClass("scored"), $('[data-type="sco-away"]', h).addClass("scored"));
  $('[data-type="item"]', h).attr("data-id", b.compositeId);
  $('[data-type="item"]', h).attr("data-match-id", b.providerId + "-" + b.matchId);
  $('[data-type="item"]', h).attr("data-esd", b.scheduledStart);
  void 0 !== b.overallStatusId && null !== b.overallStatusId && 0 < b.overallStatusId && $('[data-type="item"]', h).attr("data-epr", b.overallStatusId);
  b.isCorrection() && $('[data-type="item"]', h).addClass("correction");
  this.lastRowEven || $('[data-type="row_group"]', h).addClass("even");
  this.drawBetButton($('[data-type="item"]', h));
  return $(h.html())
};
com.livescore.NotificationWidget.prototype.drawIncident = function(b, h) {
  var f = this,
      p = $('[data-match-id="' + b.providerId + "-" + b.matchId + '"] [data-type="score"]'),
      n = $('[data-type="link"]', this.tpl).clone(),
      m, t, u, B;
  0 < p.length && 0 < n.length && p.each(function() {
    m = $(this);
    B = m.text();
    b.hasDetails && void 0 !== b.category && void 0 !== b.stage && void 0 !== b.teamCode && 0 == $('[data-type="link"]', m).length ? (t = n.clone(), u = void 0 !== com.livescore.NotificationWidgetSettings.events[f.sport] && void 0 !== com.livescore.NotificationWidgetSettings.events[f.sport][b.category] ? "/" + com.livescore.NotificationWidgetSettings.events[f.sport][b.category] + "/" : "/" + f.sport + "/" + b.category + "/", t.attr("href", u + b.stage + "/" + b.teamCode + "/" + b.providerId + "-" + b.matchId + "/"), t.html(B), m.empty().append(t), !0 !== h && f.highlightScore(m)) : b.hasDetails || ($('[data-type="link"]', m).remove(), m.html(B))
  })
};
com.livescore.NotificationWidget.prototype.drawStar = function(b) {
  var h = b.providerId + "-" + b.matchId;
  supports_html5_storage() && !0 !== com.livescore.ds && ($('[data-match-id="' + h + '"] [data-type="star"]', this.aggregateContainers).removeClass("hidden"), $('[data-match-id="' + h + '"] [data-type="star"] i', this.aggregateContainers).removeClass("hidden"), b = com.livescore.Match.fromNotification(b, this.sport), com.livescore.MatchService.isMyMatch(b) ? $('[data-match-id="' + h + '"] [data-type="star"]', this.aggregateContainers).addClass("active") : $('[data-match-id="' + h + '"] [data-type="star"]', this.aggregateContainers).removeClass("active"))
};
com.livescore.NotificationWidget.prototype.drawBetButtons = function() {
  var b = this,
      h = {},
      f = $('[data-type="ticker_container_latest"], [data-type="ticker_container"]'),
      p, n, m, t;
  if (void 0 !== this.geoAdsConfig.data) {
    var u = this.geoAdsConfig.data.match(/href="[^"]+"/);
    null !== u && 0 < u.length && 7 < u[0].length && (n = u[0].substring(6, u[0].length - 1));
    void 0 !== n && $('[data-type="item"]', f).each(function() {
      p = $(this);
      t = p.attr("data-match-id");
      void 0 !== t && 0 < t.length && (m = h[t], void 0 === m && (m = parseInt(p.attr("data-epr"), 10), 0 < m && (h[t] = m)), b.drawBetButton(p, t, m || 0, n));
      b.drawBetButton(p, t, m || 0)
    })
  } else $('[data-type="item"] [data-type="bet-button"]', f).addClass("hidden")
};
com.livescore.NotificationWidget.prototype.drawBetButton = function(b, h, f, p) {
  var n = void 0 !== f;
  h = h || b.attr("data-match-id");
  f = f || parseInt(b.attr("data-epr"), 10);
  if (void 0 === p && void 0 !== this.geoAdsConfig.data) {
    var m = this.geoAdsConfig.data.match(/href="[^"]+"/);
    null !== m && 0 < m.length && 7 < m[0].length && (p = m[0].substring(6, m[0].length - 1))
  }
  void 0 !== h && 0 < h.length && 0 < f && void 0 !== p && (2 == f ? ($('[data-type="bet-button"]', b).addClass("hidden"), n || ($('[data-match-id="' + h + '"] [data-type="bet-button"]', this.containerLatest).addClass("hidden"), $('[data-match-id="' + h + '"] [data-type="bet-button"]', this.container).addClass("hidden"))) : ($('[data-type="bet-button"] a', b).attr("href", p), $('[data-type="bet-button"] span', b).attr("data-href", p), $('[data-type="bet-button"]', b).removeClass("hidden")))
};
com.livescore.NotificationWidget.prototype.suspendNotifications = function() {
  this.notificationsSuspended = !0
};
com.livescore.NotificationWidget.prototype.resumeNotifications = function() {
  !0 === this.notificationsSuspended && (this.notificationsSuspended = !1, !0 !== this.rowSliding && this.executeCallStack())
};
com.livescore.NotificationWidget.prototype.teamToString = function(b) {
  return 0 < b.length && void 0 !== b[0].name ? b[0].name : ""
};
com.livescore.NotificationWidget.prototype.tennisTeamToString = function(b) {
  var h = "";
  $.each(b, function(f) {
    0 < f && (h += " / ");
    h += void 0 === this.name ? "" : this.name
  });
  return h
};
com.livescore.NotificationWidget.prototype.playSoundForNotification = function(b) {
  var h = com.livescore.Match.fromNotification(b, this.sport);
  (h = 0 == this.soundsEnabled || 1 == this.soundsEnabled && null !== h && com.livescore.MatchService.isMyMatch(h)) && "sc" == b.type && void 0 !== b.scorerPosition && ("soccer" == this.sport || "hockey" == this.sport || "tennis" == this.sport && void 0 !== b.homeSetScore && void 0 !== b.awaySetScore) && !b.isCorrection() ? ion.sound.play("goal") : h && "soccer" == this.sport && "st" == b.type && 10 == b.status ? ion.sound.play("half_time") : h && "soccer" == this.sport && "st" == b.type && 2 == b.overallStatusId ? ion.sound.play("full_time") : h && ("soccer" == this.sport && "rc" == b.type || "basketball" == this.sport && "st" == b.type && (2 == b.overallStatusId || 1 == b.overallStatusId && 32 == b.status)) && ion.sound.play("red_card")
};
com.livescore.NotificationWidget.init = function(b, h) {
  var f = new com.livescore.NotificationWidget(b, h);
  f.init();
  return f
};
com.livescore.OddsUpdateEvent = function(b, h, f) {
  this.sender = b;
  this.data = h;
  this.type = f
};
com.livescore.OddsService = function() {
  function b() {
    h();
    com.livescore.JsonpService.sendRequest("/", "process")
  }
  function h() {
    var y = (new Date).getTime(); - 1 < com.livescore.OddsServiceSettings.sports.indexOf(n) && -1 < com.livescore.OddsServiceSettings.providers.indexOf(t) && null !== u && $.ajax({
      url: "//" + com.livescore.OddsServiceSettings.host + com.livescore.OddsServiceSettings.basePath + n + "/" + t + "/" + u + "/" + (B ? "l" : "p") + "/",
      dataType: "text",
      type: "GET",
      success: function(H) {
        var D = {};
        try {
          D = $.parseJSON(com.livescore.CryptUtil.decrypt(H))
        } catch (F) {}
        newNotifications = [];
        notificationsToAdd = [];
        notificationsToRemove = [];
        m.raise(new com.livescore.OddsUpdateEvent(this, D, "odds"))
      },
      complete: function() {
        p(y)
      }
    })
  }
  function f(y) {
    void 0 !== y && "process" == y.id && void 0 !== y.data && void 0 !== y.data.id && 1 == y.data.id.site && 91 == y.data.id.pos && m.raise(new com.livescore.OddsUpdateEvent(this, y.data, "banner"))
  }
  function p(y) {
    y = (new Date).getTime() - y;
    y > com.livescore.OddsServiceSettings.refreshPeriod ? b(n) : window.setTimeout(function() {
      b(n)
    }, com.livescore.OddsServiceSettings.refreshPeriod - y)
  }
  var n =
  null,
      m = new com.livescore.EventHandler,
      t = null,
      u = null,
      B = !1;
  return {
    onUpdate: m,
    init: function(y, H, D, F) {
      n = y;
      t = H;
      u = D;
      B = F;
      com.livescore.JsonpService.onDataReceived.bind(this, f);
      $.support.cors = !0
    },
    start: function() {
      b()
    }
  }
}();
com.livescore.OddsBannerWidget = function(b) {
  this.sport = b;
  this.container = $('[data-type="odds_bnr"]');
  this.tempContainer = $("<div></div>").css({
    width: "1px",
    height: "1px",
    position: "absolute",
    left: "-100px",
    top: "-100px",
    visibility: "hidden"
  });
  this.timedOut = !1;
  this.banner = this.odds = this.initTimer = null
};
com.livescore.OddsBannerWidget.prototype.init = function(b, h) {
  void 0 !== b && null !== b && (this.odds = b, this.isLive = h, this.load())
};
com.livescore.OddsBannerWidget.prototype.load = function() {
  this.url = this.container.attr("data-url");
  void 0 !== this.url && null !== this.url && 0 < this.url.length && (com.livescore.JsonpService.onDataReceived.bind(this, this.onBannerReceive), com.livescore.JsonpService.sendRequest(this.url + "&jsonp=1", "process"))
};
com.livescore.OddsBannerWidget.prototype.onBannerReceive = function(b) {
  if (void 0 !== b && void 0 !== b.data && void 0 !== b.data.data && void 0 !== b.data.id) {
    var h = "/";
    h != this.url || this.timedOut || this.drawBanner(b.data.data, b.data.id.bookmaker)
  }
};
com.livescore.OddsBannerWidget.prototype.htmlFromBannerData = function(b) {
  $("body").append(this.tempContainer);
  this.tempContainer.html(b);
  b = this.tempContainer.text();
  this.tempContainer.detach();
  return b
};
com.livescore.OddsBannerWidget.prototype.linkUrlFromBannerHtml = function(b) {
  var h;
  b = b.match(/href="[^"]+"/);
  null !== b && 0 < b.length && 7 < b[0].length && (h = b[0].substring(6, b[0].length - 1));
  return h
};
com.livescore.OddsBannerWidget.prototype.oddsForBookmakerId = function(b) {
  var h;
  void 0 !== this.odds && null !== this.odds && void 0 !== b && (h = this.odds[b]);
  return h
};
com.livescore.OddsBannerWidget.prototype.drawBanner = function(b, h) {
  var f = this.htmlFromBannerData(b);
  var p = this.linkUrlFromBannerHtml(f);
  var n = this.oddsForBookmakerId(h);
  this.container.removeClass("hidden");
  void 0 !== p && void 0 !== n && (!0 === n.l && !0 === this.isLive || !0 !== n.l && !0 !== this.isLive) ? (f = (this.isLive ? "Bet Live" : "Bet Now") + " - 1: " + this.formatNumber(n["1"], 2) + "&nbsp X: " + this.formatNumber(n.X, 2) + "&nbsp; 2: " + this.formatNumber(n["2"], 2), this.container.html('<a href="' + p + '" target="_blank">' + f + "</a>")) : (p = this.container.attr("data-width"), n = this.container.attr("data-height"), void 0 !== p && null !== p && void 0 !== n && null !== n && (p = $("<iframe></iframe>").attr("width", p).attr("height", n).attr("marginwidth", "0").attr("marginheight", "0").attr("hspace", "0").attr("vspace", "0").attr("scrolling", "no").attr("frameborder", "no").attr("allowtransparency", "true").css("border-width", "0"), this.container.append(p), p = p[0].contentWindow.document, p.open(), p.write(f), p.close()))
};
com.livescore.OddsBannerWidget.prototype.formatNumber = function(b, h) {
  var f = parseFloat(b, 10),
      p = parseInt(h, 10);
  return isNaN(b) || isNaN(h) ? null : f.toFixed(p)
};
com.livescore.OddsBannerWidget.init = function(b, h, f) {
  b = new com.livescore.OddsBannerWidget(b);
  b.init(h, f);
  return b
};
(function() {
  for (var b = [{
    base: "A",
    letters: "A\u24b6\uff21\u00c0\u00c1\u00c2\u1ea6\u1ea4\u1eaa\u1ea8\u00c3\u0100\u0102\u1eb0\u1eae\u1eb4\u1eb2\u0226\u01e0\u00c4\u01de\u1ea2\u00c5\u01fa\u01cd\u0200\u0202\u1ea0\u1eac\u1eb6\u1e00\u0104\u023a\u2c6f"
  }, {
    base: "AA",
    letters: "\ua732"
  }, {
    base: "AE",
    letters: "\u00c6\u01fc\u01e2"
  }, {
    base: "AO",
    letters: "\ua734"
  }, {
    base: "AU",
    letters: "\ua736"
  }, {
    base: "AV",
    letters: "\ua738\ua73a"
  }, {
    base: "AY",
    letters: "\ua73c"
  }, {
    base: "B",
    letters: "B\u24b7\uff22\u1e02\u1e04\u1e06\u0243\u0182\u0181"
  }, {
    base: "C",
    letters: "C\u24b8\uff23\u0106\u0108\u010a\u010c\u00c7\u1e08\u0187\u023b\ua73e"
  }, {
    base: "D",
    letters: "D\u24b9\uff24\u1e0a\u010e\u1e0c\u1e10\u1e12\u1e0e\u0110\u018b\u018a\u0189\ua779"
  }, {
    base: "DZ",
    letters: "\u01f1\u01c4"
  }, {
    base: "Dz",
    letters: "\u01f2\u01c5"
  }, {
    base: "E",
    letters: "E\u24ba\uff25\u00c8\u00c9\u00ca\u1ec0\u1ebe\u1ec4\u1ec2\u1ebc\u0112\u1e14\u1e16\u0114\u0116\u00cb\u1eba\u011a\u0204\u0206\u1eb8\u1ec6\u0228\u1e1c\u0118\u1e18\u1e1a\u0190\u018e"
  }, {
    base: "F",
    letters: "F\u24bb\uff26\u1e1e\u0191\ua77b"
  }, {
    base: "G",
    letters: "G\u24bc\uff27\u01f4\u011c\u1e20\u011e\u0120\u01e6\u0122\u01e4\u0193\ua7a0\ua77d\ua77e"
  }, {
    base: "H",
    letters: "H\u24bd\uff28\u0124\u1e22\u1e26\u021e\u1e24\u1e28\u1e2a\u0126\u2c67\u2c75\ua78d"
  }, {
    base: "I",
    letters: "I\u24be\uff29\u00cc\u00cd\u00ce\u0128\u012a\u012c\u0130\u00cf\u1e2e\u1ec8\u01cf\u0208\u020a\u1eca\u012e\u1e2c\u0197"
  }, {
    base: "J",
    letters: "J\u24bf\uff2a\u0134\u0248"
  }, {
    base: "K",
    letters: "K\u24c0\uff2b\u1e30\u01e8\u1e32\u0136\u1e34\u0198\u2c69\ua740\ua742\ua744\ua7a2"
  }, {
    base: "L",
    letters: "L\u24c1\uff2c\u013f\u0139\u013d\u1e36\u1e38\u013b\u1e3c\u1e3a\u0141\u023d\u2c62\u2c60\ua748\ua746\ua780"
  }, {
    base: "LJ",
    letters: "\u01c7"
  }, {
    base: "Lj",
    letters: "\u01c8"
  }, {
    base: "M",
    letters: "M\u24c2\uff2d\u1e3e\u1e40\u1e42\u2c6e\u019c"
  }, {
    base: "N",
    letters: "N\u24c3\uff2e\u01f8\u0143\u00d1\u1e44\u0147\u1e46\u0145\u1e4a\u1e48\u0220\u019d\ua790\ua7a4"
  }, {
    base: "NJ",
    letters: "\u01ca"
  }, {
    base: "Nj",
    letters: "\u01cb"
  }, {
    base: "O",
    letters: "O\u24c4\uff2f\u00d2\u00d3\u00d4\u1ed2\u1ed0\u1ed6\u1ed4\u00d5\u1e4c\u022c\u1e4e\u014c\u1e50\u1e52\u014e\u022e\u0230\u00d6\u022a\u1ece\u0150\u01d1\u020c\u020e\u01a0\u1edc\u1eda\u1ee0\u1ede\u1ee2\u1ecc\u1ed8\u01ea\u01ec\u00d8\u01fe\u0186\u019f\ua74a\ua74c"
  }, {
    base: "OI",
    letters: "\u01a2"
  }, {
    base: "OO",
    letters: "\ua74e"
  }, {
    base: "OU",
    letters: "\u0222"
  }, {
    base: "OE",
    letters: "\u008c\u0152"
  }, {
    base: "oe",
    letters: "\u009c\u0153"
  }, {
    base: "P",
    letters: "P\u24c5\uff30\u1e54\u1e56\u01a4\u2c63\ua750\ua752\ua754"
  }, {
    base: "Q",
    letters: "Q\u24c6\uff31\ua756\ua758\u024a"
  }, {
    base: "R",
    letters: "R\u24c7\uff32\u0154\u1e58\u0158\u0210\u0212\u1e5a\u1e5c\u0156\u1e5e\u024c\u2c64\ua75a\ua7a6\ua782"
  }, {
    base: "S",
    letters: "S\u24c8\uff33\u1e9e\u015a\u1e64\u015c\u1e60\u0160\u1e66\u1e62\u1e68\u0218\u015e\u2c7e\ua7a8\ua784"
  }, {
    base: "T",
    letters: "T\u24c9\uff34\u1e6a\u0164\u1e6c\u021a\u0162\u1e70\u1e6e\u0166\u01ac\u01ae\u023e\ua786"
  }, {
    base: "TZ",
    letters: "\ua728"
  }, {
    base: "U",
    letters: "U\u24ca\uff35\u00d9\u00da\u00db\u0168\u1e78\u016a\u1e7a\u016c\u00dc\u01db\u01d7\u01d5\u01d9\u1ee6\u016e\u0170\u01d3\u0214\u0216\u01af\u1eea\u1ee8\u1eee\u1eec\u1ef0\u1ee4\u1e72\u0172\u1e76\u1e74\u0244"
  }, {
    base: "V",
    letters: "V\u24cb\uff36\u1e7c\u1e7e\u01b2\ua75e\u0245"
  }, {
    base: "VY",
    letters: "\ua760"
  }, {
    base: "W",
    letters: "W\u24cc\uff37\u1e80\u1e82\u0174\u1e86\u1e84\u1e88\u2c72"
  }, {
    base: "X",
    letters: "X\u24cd\uff38\u1e8a\u1e8c"
  }, {
    base: "Y",
    letters: "Y\u24ce\uff39\u1ef2\u00dd\u0176\u1ef8\u0232\u1e8e\u0178\u1ef6\u1ef4\u01b3\u024e\u1efe"
  }, {
    base: "Z",
    letters: "Z\u24cf\uff3a\u0179\u1e90\u017b\u017d\u1e92\u1e94\u01b5\u0224\u2c7f\u2c6b\ua762"
  }, {
    base: "a",
    letters: "a\u24d0\uff41\u1e9a\u00e0\u00e1\u00e2\u1ea7\u1ea5\u1eab\u1ea9\u00e3\u0101\u0103\u1eb1\u1eaf\u1eb5\u1eb3\u0227\u01e1\u00e4\u01df\u1ea3\u00e5\u01fb\u01ce\u0201\u0203\u1ea1\u1ead\u1eb7\u1e01\u0105\u2c65\u0250"
  }, {
    base: "aa",
    letters: "\ua733"
  }, {
    base: "ae",
    letters: "\u00e6\u01fd\u01e3"
  }, {
    base: "ao",
    letters: "\ua735"
  }, {
    base: "au",
    letters: "\ua737"
  }, {
    base: "av",
    letters: "\ua739\ua73b"
  }, {
    base: "ay",
    letters: "\ua73d"
  }, {
    base: "b",
    letters: "b\u24d1\uff42\u1e03\u1e05\u1e07\u0180\u0183\u0253"
  }, {
    base: "c",
    letters: "c\u24d2\uff43\u0107\u0109\u010b\u010d\u00e7\u1e09\u0188\u023c\ua73f\u2184"
  }, {
    base: "d",
    letters: "d\u24d3\uff44\u1e0b\u010f\u1e0d\u1e11\u1e13\u1e0f\u0111\u018c\u0256\u0257\ua77a"
  }, {
    base: "dz",
    letters: "\u01f3\u01c6"
  }, {
    base: "e",
    letters: "e\u24d4\uff45\u00e8\u00e9\u00ea\u1ec1\u1ebf\u1ec5\u1ec3\u1ebd\u0113\u1e15\u1e17\u0115\u0117\u00eb\u1ebb\u011b\u0205\u0207\u1eb9\u1ec7\u0229\u1e1d\u0119\u1e19\u1e1b\u0247\u025b\u01dd"
  }, {
    base: "f",
    letters: "f\u24d5\uff46\u1e1f\u0192\ua77c"
  }, {
    base: "g",
    letters: "g\u24d6\uff47\u01f5\u011d\u1e21\u011f\u0121\u01e7\u0123\u01e5\u0260\ua7a1\u1d79\ua77f"
  }, {
    base: "h",
    letters: "h\u24d7\uff48\u0125\u1e23\u1e27\u021f\u1e25\u1e29\u1e2b\u1e96\u0127\u2c68\u2c76\u0265"
  }, {
    base: "hv",
    letters: "\u0195"
  }, {
    base: "i",
    letters: "i\u24d8\uff49\u00ec\u00ed\u00ee\u0129\u012b\u012d\u00ef\u1e2f\u1ec9\u01d0\u0209\u020b\u1ecb\u012f\u1e2d\u0268\u0131"
  }, {
    base: "j",
    letters: "j\u24d9\uff4a\u0135\u01f0\u0249"
  }, {
    base: "k",
    letters: "k\u24da\uff4b\u1e31\u01e9\u1e33\u0137\u1e35\u0199\u2c6a\ua741\ua743\ua745\ua7a3"
  }, {
    base: "l",
    letters: "l\u24db\uff4c\u0140\u013a\u013e\u1e37\u1e39\u013c\u1e3d\u1e3b\u017f\u0142\u019a\u026b\u2c61\ua749\ua781\ua747"
  }, {
    base: "lj",
    letters: "\u01c9"
  }, {
    base: "m",
    letters: "m\u24dc\uff4d\u1e3f\u1e41\u1e43\u0271\u026f"
  }, {
    base: "n",
    letters: "n\u24dd\uff4e\u01f9\u0144\u00f1\u1e45\u0148\u1e47\u0146\u1e4b\u1e49\u019e\u0272\u0149\ua791\ua7a5"
  }, {
    base: "nj",
    letters: "\u01cc"
  }, {
    base: "o",
    letters: "o\u24de\uff4f\u00f2\u00f3\u00f4\u1ed3\u1ed1\u1ed7\u1ed5\u00f5\u1e4d\u022d\u1e4f\u014d\u1e51\u1e53\u014f\u022f\u0231\u00f6\u022b\u1ecf\u0151\u01d2\u020d\u020f\u01a1\u1edd\u1edb\u1ee1\u1edf\u1ee3\u1ecd\u1ed9\u01eb\u01ed\u00f8\u01ff\u0254\ua74b\ua74d\u0275"
  }, {
    base: "oi",
    letters: "\u01a3"
  }, {
    base: "ou",
    letters: "\u0223"
  }, {
    base: "oo",
    letters: "\ua74f"
  }, {
    base: "p",
    letters: "p\u24df\uff50\u1e55\u1e57\u01a5\u1d7d\ua751\ua753\ua755"
  }, {
    base: "q",
    letters: "q\u24e0\uff51\u024b\ua757\ua759"
  }, {
    base: "r",
    letters: "r\u24e1\uff52\u0155\u1e59\u0159\u0211\u0213\u1e5b\u1e5d\u0157\u1e5f\u024d\u027d\ua75b\ua7a7\ua783"
  }, {
    base: "s",
    letters: "s\u24e2\uff53\u00df\u015b\u1e65\u015d\u1e61\u0161\u1e67\u1e63\u1e69\u0219\u015f\u023f\ua7a9\ua785\u1e9b"
  }, {
    base: "t",
    letters: "t\u24e3\uff54\u1e6b\u1e97\u0165\u1e6d\u021b\u0163\u1e71\u1e6f\u0167\u01ad\u0288\u2c66\ua787"
  }, {
    base: "tz",
    letters: "\ua729"
  }, {
    base: "u",
    letters: "u\u24e4\uff55\u00f9\u00fa\u00fb\u0169\u1e79\u016b\u1e7b\u016d\u00fc\u01dc\u01d8\u01d6\u01da\u1ee7\u016f\u0171\u01d4\u0215\u0217\u01b0\u1eeb\u1ee9\u1eef\u1eed\u1ef1\u1ee5\u1e73\u0173\u1e77\u1e75\u0289"
  }, {
    base: "v",
    letters: "v\u24e5\uff56\u1e7d\u1e7f\u028b\ua75f\u028c"
  }, {
    base: "vy",
    letters: "\ua761"
  }, {
    base: "w",
    letters: "w\u24e6\uff57\u1e81\u1e83\u0175\u1e87\u1e85\u1e98\u1e89\u2c73"
  }, {
    base: "x",
    letters: "x\u24e7\uff58\u1e8b\u1e8d"
  }, {
    base: "y",
    letters: "y\u24e8\uff59\u1ef3\u00fd\u0177\u1ef9\u0233\u1e8f\u00ff\u1ef7\u1e99\u1ef5\u01b4\u024f\u1eff"
  }, {
    base: "z",
    letters: "z\u24e9\uff5a\u017a\u1e91\u017c\u017e\u1e93\u1e95\u01b6\u0225\u0240\u2c6c\ua763"
  }], h = {}, f = 0; f < b.length; f++) for (var p = b[f].letters, n = 0; n < p.length; n++) h[p[n]] = b[f].base;
  com.livescore.global = {
    init: function() {
      var m = this;
      $(document).ready(function() {
        m.initMenu();
        m.initContactForm();
        m.initTimeZoneEdit();
        m.initSocialButtons();
        m.initInfoBar();
        m.initJsLinks();
        com.livescore.AdWidget.init();
        com.livescore.CommentLoaderUtil.init()
      })
    },
    iPhoneSimulator: function(m) {
      iphone = window.open(m, "iPhone", "width=415,height=755,menubar=no,status=no,location=no,toolbar=no,scrollbars=no,resizable=yes")
    },
    lsGetElId: function(m) {
      return document.getElementById(m)
    },
    verifyForm: function(m) {
      var t = "";
      null === m.sender.value.match(/^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/) && (t = "Your e-mail address is not valid. \n");
      if ("blank" == m.subject.value || "" == m.subject.value) t += "You have to select a subject. \n";
      "" == m.message.value && (t += "You did not type any message.");
      if ("" != t) return alert(t), !1;
      t = $("#message", m).val() + "\n\nDate from the browser: " + new Date + "\nTimezone from cookie: " + com.livescore.CookieHelper.getCookie("tz") + "\nCookies are " + (areCookiesEnabled() ? "enabled" : "disabled");
      var u = $('<input type="hidden" name="message"/>');
      $("#message", m).attr("name", "message_text");
      $(m).append(u);
      $('[name="message"]', m).val(this.removeDiacritics(t));
      m.submit()
    },
    verifyMax: function(m) {
      5E3 < m.value.length && (alert("Message is limited to 5000 characters !"), document.mailForm.message.value = m.value.substring(0, 5E3))
    },
    verifyTimezoneForm: function(m) {
      var t = "";
      "" == m.timezone.value && (t += "You have to select a timezone offset.");
      if ("" != t) return alert(t), !1;
      m.submit()
    },

    setTzCookie: function() {
      expiration = new Date;
      expiration.setHours(expiration.getHours() - 1);
      document.cookie = "tz=0;path=/;expires=" + expiration.toUTCString();
      document.cookie = "tz=0;domain=" + location.hostname + ";path=/;expires=" + expiration.toUTCString();
      document.cookie = "tzu=0;domain=" + location.hostname + ";path=/;expires=" + expiration.toUTCString();
      document.cookie = "tz=0;domain=." + location.hostname + ";path=/;expires=" + expiration.toUTCString();
      document.cookie = "tzu=0;domain=." + location.hostname + ";path=/;expires=" + expiration.toUTCString();
      if (0 <= location.hostname.indexOf("www")) {
        var m = location.hostname.substring(3);
        document.cookie = "tz=0;domain=" + m + ";path=/;expires=" + expiration.toUTCString();
        document.cookie = "tzu=0;domain=" + m + ";path=/;expires=" + expiration.toUTCString()
      } else 0 <= location.hostname.indexOf("beta") && (m = location.hostname.substring(4), document.cookie = "tz=0;domain=" + m + ";path=/;expires=" + expiration.toUTCString(), document.cookie = "tzu=0;domain=" + m + ";path=/;expires=" + expiration.toUTCString());
      m = 0;
      for (var t = !1, u = document.cookie.split(";"), B = !1; m < u.length && (!1 === t || !1 === B);)"tz" === u[m].substr(0, u[m].indexOf("=")) ? t = !0 : "tzu=1" == u[m] && (B = !0), m++;
      if (0 == (B & t)) {
        m = (new Date).getTimezoneOffset() / -60;
        if (-900 > m || 900 < m) m = 0;
        com.livescore.CookieHelper.setCookie({
          name: "tz",
          value: m,
          domain: location.hostname
        })
      }
    return m;
    },
    trackPage: function(m) {
      $(document).ready(function() {
        if (m) {
          var t =
          encodeURIComponent(location.hostname),
              u = encodeURIComponent(location.pathname),
              B = encodeURIComponent(location.href),
              y = encodeURIComponent(document.referrer.replace(/tz=[0-9]+&?/i, "").replace(/(\?|&)$/i, ""));
          t = "tid=" + m + "&h=" + t + "&p=" + u + "&l=" + B;
          iframe = $("<iframe>");
          0 < y.length && (t += "&r=" + y);
          iframe.css("position", "absolute");
          iframe.css("width", "1px");
          iframe.css("height", "1px");
          iframe.css("left", "-1px");
          iframe.css("top", "-1px");
          iframe.css("display", "none");
          iframe.attr("src", "/");
          $("body").append(iframe)
        }
      })
    },
    initMenu: function() {
      if (supports_html5_storage()) {
        var m = function(u) {
          $(u).unbind();
          $(u).click(function(B) {
            B.preventDefault();
            localStorage.hidemenu = null;
            document.location = $(u).attr("href")
          })
        };
        $('[data-type="selmenu"], [data-type="submenu"]').each(function() {
          var u = $(this).attr("href");
          $(this).attr("href", u.substring(0, u.indexOf("?")))
        });
        $("> ul.buttons", $('ul.buttons > li:not(:has(> a[data-type="submenu"]))').filter(function() {
          return 0 < !$(this).find("> a.selected").length
        })).css("display", "block");
        if (localStorage.hidemenu !== location.href) {
          localStorage.hidemenu = null;
          var t = $('[data-type="selmenu"]');
          $("ul.buttons", t.closest("ul")).css("display", "block");
          t.click(function(u) {
            u.preventDefault();
            localStorage.hidemenu = location.href;
            $("ul.buttons", $(this).closest("ul")).css("display", "none");
            m(this)
          })
        } else m('[data-type="selmenu"]');
        localStorage.showsubmenu !== location.href && (localStorage.showsubmenu = null);
        t = $('[data-type="submenu"]');
        (localStorage.showsubmenu == location.href && 0 == $("> ul.buttons", t.closest("li")).find("a.selected").length || localStorage.showsubmenu != location.href && 0 < $("> ul.buttons", t.closest("li")).find("a.selected").length) && $("> ul.buttons", t.closest("li")).css("display", "block");
        $('a[data-type="submenu"]').click(function(u) {
          var B = 0 < $("> ul.buttons", $(this).closest("li")).find("a.selected").length;
          u.preventDefault();
          localStorage.showsubmenu == location.href ? (localStorage.showsubmenu = null, $("> ul.buttons", $(this).closest("li")).css("display", B ? "block" : "none")) : (localStorage.showsubmenu =
          location.href, $("> ul.buttons", $(this).closest("li")).css("display", B ? "none" : "block"));
          com.livescore.AdWidget.updateStickyBannerPos()
        })
      }
    },
    initSocialButtons: function() {
      function m(F) {
        $(".disabled", F).remove();
        if (null === y.live) {
          var R = document.getElementsByTagName("script")[0];
          if (!document.getElementById("facebook-jssdk")) {
            var E = document.createElement("script");
            E.id = "facebook-jssdk";
            E.src = "//connect.facebook.net/en_US/all.js";
            R.parentNode.insertBefore(E, R)
          }
        } else $(F).empty(), $(F).html(y.live);
        $(".switch", F).removeClass("switch-off").addClass("switch-on")
      }
      function t(F) {
        $(".disabled", F).remove();
        if (null === H.live) {
          var R = document.createElement("script");
          R.type = "text/javascript";
          R.async = !0;
          R.src = "https://apis.google.com/js/plusone.js";
          var E = document.getElementsByTagName("script")[0];
          E.parentNode.insertBefore(R, E)
        } else $(F).empty(), $(F).html(H.live);
        $(".switch", F).removeClass("switch-off").addClass("switch-on")
      }
      var u = !0,
          B = livescore.browser({
          versionie: !0
        }),
          y = {
          dead: $(".facebook:first").html(),
          live: null
          },
          H = {
          dead: $(".google:first").html(),
          live: null
          },
          D = $("html");
      D.delegate(".facebook .disabled", "click", function() {
        var F = $(this).closest("div.facebook");
        m(F)
      });
      D.delegate(".google .disabled", "click", function() {
        var F = $(this).closest("div.google");
        t(F)
      });
      D.delegate(".facebook .switch", "click", function() {
        var F = $(this).closest("div.facebook");
        $(this).hasClass("switch-on") ? (null === y.live && (y.live = $(F).html()), $(F).empty(), $(F).html(y.dead), $(".disabled", F).show(), $(".switch", F).removeClass("switch-on").addClass("switch-off")) : m(F)
      });
      D.delegate(".google .switch", "click", function() {
        var F = $(this).closest("div.google");
        $(this).hasClass("switch-on") ? (null === H.live && (H.live = $(F).html()), $(F).empty(), $(F).html(H.dead), $(".disabled", F).show(), $(".switch", F).removeClass("switch-on").addClass("switch-off")) : t(F)
      });
      try {
        3 <= B.length && "IE" == B.substring(0, 2) && 7 >= parseInt(B.substring(2)) && (u = !1)
      } catch (F) {}
      $(".facebook").removeClass("hidden");
      u && (u = $(".google"), u.removeClass("hidden"))
    },
    initContactForm: function() {
      var m = this;
      $('[name="mailForm"]').submit(function(t) {
        t.preventDefault();
        m.verifyForm(this)
      });
      $('[name="timezoneForm"] [name="s"]').click(function(t) {
        t.preventDefault();
        m.verifyTimezoneForm($('[name="timezoneForm"]')[0])
      })
    },
    initTimeZoneEdit: function() {
      var m = $('[data-type="timezone"]'),
          t = $('[data-type="preview"]', m),
          u = $('[data-type="edit"]', m);
      $(t).click(function() {
        $(t).css("display", "none");
        $(u).css("display", "inline")
      });
      $('[data-name="confirm"]', u).click(function() {
        var B = $('[data-name="timezone_field"]', u).val();
        if (null == B.match(/^\([+-][0-9]{2}:[0-9]{2}\)$/)) var y = null;
        else {
          y = B.substring(1, 2);
          var H = parseInt(B.substring(2, 4), 10);
          B = parseInt(B.substring(5, 7), 10);
          y = ("+" == y && 14 >= H || 11 >= H) && 59 >= B ? "+" == y ? "" + Math.round(100 * (H + B / 60)) / 100 : y + Math.round(100 * (H + B / 60)) / 100 : null
        }
        null != y && (CookieHelper.setCookie({
          name: "tzu",
          value: y
        }), location.reload())
      });
      $('[data-name="cancel"]', u).click(function() {
        var B = $(t).text();
        $('[data-name="timezone_field"]', u).val(B);
        $(t).css("display", "inline");
        $(u).css("display", "none")
      })
    },
    initInfoBar: function() {
      var m = $('[data-id="infobar"]'),
          t = !1,
          u =
          areCookiesEnabled();
      if (u && "true" !== com.livescore.CookieHelper.getCookie("cookiePolicyConsent")) {
        var B = function() {
          t || (t = !0, m.hide().removeClass("hidden"), m.slideDown({
            step: function() {
              com.livescore.AdWidget.updateStickyBannerPos()
            }
          }))
        };
        $('[data-id="confirm"]', m).click(function(y) {
          y.preventDefault();
          com.livescore.CookieHelper.setCookie({
            name: "cookiePolicyConsent",
            value: "true",
            domain: location.hostname
          });
          m.slideUp({
            step: function() {
              com.livescore.AdWidget.updateStickyBannerPos()
            },
            complete: function() {
              m.remove()
            }
          })
        });
        $(window).load(function() {
          B()
        });
        window.setTimeout(function() {
          B()
        }, 2E3)
      } else m.remove(), u && com.livescore.CookieHelper.setCookie({
        name: "cookiePolicyConsent",
        value: "true",
        domain: location.hostname
      })
    },
    scheduleRefresh: function(m) {
      m = parseInt(m);
      0 < m && window.setTimeout(function() {
        location.reload(!0)
      }, 1E3 * (m + 10))
    },
    initJsLinks: function() {
      $("body").delegate('span[data-type="link"][data-href]', "click", function() {
        window.location = $(this).attr("data-href")
      })
    },
    removeDiacritics: function(m) {
      try {
        var t = m.replace(/[^\u0000-\u007E]/g, function(u) {
          return h[u] || u
        })
      } catch (u) {
        t = m
      }
      return t
    }
  };
  com.livescore.global.init()
})();

/* Global custom variables */
$(document).ready(function() {
   livescore.matchdetails({
      target: '_blank',
      width: 600,
      height: 600,
      left: 100,
      top: 100
   });
   com.livescore.LeagueTableWidget.init('soccer', '/', '');
   com.livescore.global.setTzCookie();
   com.livescore.global.scheduleRefresh(180000); /* Refresh page : 3 minutes delay */
});

/* Menu Toggle */
$(document).ready(function() {
   $("#sport-menu").click(function() {
      $("body").toggleClass("show-menu");
      $(this).toggleClass("active");
      $(".promo-link").toggleClass("hidden");
   });
});

<?php ob_end_flush();?>