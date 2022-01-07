/* clarity-js v0.6.31: https://github.com/microsoft/clarity (License: MIT) */
!(function () {
    "use strict";
    var t = Object.freeze({
            __proto__: null,
            get track() {
                return kr;
            },
            get start() {
                return _r;
            },
            get queue() {
                return Tr;
            },
            get stop() {
                return xr;
            },
        }),
        e = Object.freeze({
            __proto__: null,
            get data() {
                return Er;
            },
            get start() {
                return Rr;
            },
            get check() {
                return Ar;
            },
            get trigger() {
                return Lr;
            },
            get compute() {
                return Yr;
            },
            get stop() {
                return Hr;
            },
        }),
        n = Object.freeze({
            __proto__: null,
            get data() {
                return qr;
            },
            get updates() {
                return Xr;
            },
            get start() {
                return Wr;
            },
            get stop() {
                return Ur;
            },
            get log() {
                return Pr;
            },
            get compute() {
                return Br;
            },
            get reset() {
                return Fr;
            },
        }),
        r = Object.freeze({
            __proto__: null,
            get data() {
                return Vr;
            },
            get callback() {
                return Gr;
            },
            get start() {
                return Zr;
            },
            get userAgentData() {
                return Kr;
            },
            get stop() {
                return Qr;
            },
            get metadata() {
                return $r;
            },
            get id() {
                return ta;
            },
            get consent() {
                return ea;
            },
            get clear() {
                return na;
            },
            get save() {
                return ra;
            },
        }),
        a = Object.freeze({
            __proto__: null,
            get data() {
                return fa;
            },
            get start() {
                return ha;
            },
            get stop() {
                return pa;
            },
            get envelope() {
                return va;
            },
        }),
        i = {
            projectId: null,
            delay: 1e3,
            lean: !1,
            track: !0,
            content: !0,
            mask: [],
            unmask: [],
            regions: [],
            metrics: [],
            dimensions: [],
            cookies: [],
            report: null,
            upload: null,
            fallback: null,
            upgrade: null,
        },
        o = 0;
    function u(t) {
        return (
            void 0 === t && (t = null),
            (t = t || performance.now()),
            Math.max(Math.round(t - o), 0)
        );
    }
    var s = "0.6.31";
    function l(t) {
        for (var e = 5381, n = e, r = 0; r < t.length; r += 2) {
            if (((e = ((e << 5) + e) ^ t.charCodeAt(r)), r + 1 < t.length))
                n = ((n << 5) + n) ^ t.charCodeAt(r + 1);
        }
        return Math.abs(e + 11579 * n).toString(36);
    }
    var c = null,
        d = null,
        f = !1;
    function h() {
        f &&
            (c = {
                time: u(),
                event: 4,
                data: {
                    visible: d.visible,
                    docWidth: d.docWidth,
                    docHeight: d.docHeight,
                    screenWidth: d.screenWidth,
                    screenHeight: d.screenHeight,
                    scrollX: d.scrollX,
                    scrollY: d.scrollY,
                    pointerX: d.pointerX,
                    pointerY: d.pointerY,
                    activityTime: d.activityTime,
                },
            }),
            (d = d || {
                visible: 1,
                docWidth: 0,
                docHeight: 0,
                screenWidth: 0,
                screenHeight: 0,
                scrollX: 0,
                scrollY: 0,
                pointerX: 0,
                pointerY: 0,
                activityTime: 0,
            });
    }
    function p(t, e, n) {
        switch (t) {
            case 8:
                (d.docWidth = e), (d.docHeight = n);
                break;
            case 11:
                (d.screenWidth = e), (d.screenHeight = n);
                break;
            case 10:
                (d.scrollX = e), (d.scrollY = n);
                break;
            default:
                (d.pointerX = e), (d.pointerY = n);
        }
        f = !0;
    }
    function v(t) {
        d.activityTime = t;
    }
    function g(t, e) {
        (d.visible = "visible" === e ? 1 : 0), d.visible || v(t), (f = !0);
    }
    function m() {
        f && zr(4);
    }
    var b = Object.freeze({
            __proto__: null,
            get state() {
                return c;
            },
            start: function () {
                (f = !1), h();
            },
            reset: h,
            track: p,
            activity: v,
            visibility: g,
            compute: m,
            stop: function () {
                h();
            },
        }),
        y = null;
    function w(t, e) {
        Ca() &&
            t &&
            e &&
            "string" == typeof t &&
            "string" == typeof e &&
            t.length < 255 &&
            e.length < 255 &&
            ((y = { key: t, value: e }), zr(24));
    }
    var k,
        E = null,
        S = null;
    function M(t, e) {
        void 0 === e && (e = 1),
            t in E || (E[t] = 0),
            t in S || (S[t] = 0),
            (E[t] += e),
            (S[t] += e);
    }
    function O(t, e) {
        null !== e &&
            (t in E || (E[t] = 0),
            t in S || (S[t] = 0),
            (E[t] += e),
            (S[t] += e));
    }
    function N(t, e) {
        null !== e &&
            !1 === isNaN(e) &&
            (t in E || (E[t] = 0),
            (e > E[t] || 0 === E[t]) && ((S[t] = e), (E[t] = e)));
    }
    function _(t, e, n) {
        return window.setTimeout(ba(t), e, n);
    }
    function T(t) {
        return window.clearTimeout(t);
    }
    var x = 0,
        I = 0,
        D = null;
    function C() {
        D && T(D), (D = _(j, I)), (x = u());
    }
    function j() {
        var t = u();
        (k = { gap: t - x }),
            zr(25),
            k.gap < 3e5
                ? (D = _(j, I))
                : xa &&
                  (w("clarity", "suspend"),
                  Fa(),
                  ["mousemove", "touchstart"].forEach(function (t) {
                      return wa(document, t, za);
                  }),
                  ["resize", "scroll", "pageshow"].forEach(function (t) {
                      return wa(window, t, za);
                  }));
    }
    var z = Object.freeze({
            __proto__: null,
            get data() {
                return k;
            },
            start: function () {
                (I = 6e4), (x = 0);
            },
            reset: C,
            stop: function () {
                T(D), (x = 0), (I = 0);
            },
        }),
        R = null;
    function A(t, e) {
        if (t in R) {
            var n = R[t],
                r = n[n.length - 1];
            e - r[0] > 100 ? R[t].push([e, 0]) : (r[1] = e - r[0]);
        } else R[t] = [[e, 0]];
    }
    function L() {
        zr(36);
    }
    function Y() {
        R = {};
    }
    var H = Object.freeze({
            __proto__: null,
            get data() {
                return R;
            },
            start: function () {
                R = {};
            },
            stop: function () {
                R = {};
            },
            track: A,
            compute: L,
            reset: Y,
        }),
        q = null;
    function X(t) {
        Ca() &&
            i.lean &&
            ((i.lean = !1),
            (q = { key: t }),
            ra(),
            i.upgrade && i.upgrade(t),
            zr(3));
    }
    var W = Object.freeze({
            __proto__: null,
            get data() {
                return q;
            },
            start: function () {
                !i.lean && i.upgrade && i.upgrade("Config"), (q = null);
            },
            upgrade: X,
            stop: function () {
                q = null;
            },
        }),
        U = null;
    function P(t, e) {
        F(t, "string" == typeof e ? [e] : e);
    }
    function B(t, e, n) {
        void 0 === e && (e = null),
            void 0 === n && (n = null),
            F("userId", [t]),
            F("sessionId", [e]),
            F("pageId", [n]);
    }
    function F(t, e) {
        if (Ca() && t && e && "string" == typeof t && t.length < 255) {
            for (var n = (t in U) ? U[t] : [], r = 0; r < e.length; r++)
                "string" == typeof e[r] && e[r].length < 255 && n.push(e[r]);
            U[t] = n;
        }
    }
    function V() {
        zr(34);
    }
    function G() {
        U = {};
    }
    function J(t, e, n, r) {
        return new (n || (n = Promise))(function (a, i) {
            function o(t) {
                try {
                    s(r.next(t));
                } catch (t) {
                    i(t);
                }
            }
            function u(t) {
                try {
                    s(r.throw(t));
                } catch (t) {
                    i(t);
                }
            }
            function s(t) {
                var e;
                t.done
                    ? a(t.value)
                    : ((e = t.value),
                      e instanceof n
                          ? e
                          : new n(function (t) {
                                t(e);
                            })).then(o, u);
            }
            s((r = r.apply(t, e || [])).next());
        });
    }
    function Z(t, e) {
        var n,
            r,
            a,
            i,
            o = {
                label: 0,
                sent: function () {
                    if (1 & a[0]) throw a[1];
                    return a[1];
                },
                trys: [],
                ops: [],
            };
        return (
            (i = { next: u(0), throw: u(1), return: u(2) }),
            "function" == typeof Symbol &&
                (i[Symbol.iterator] = function () {
                    return this;
                }),
            i
        );
        function u(i) {
            return function (u) {
                return (function (i) {
                    if (n)
                        throw new TypeError("Generator is already executing.");
                    for (; o; )
                        try {
                            if (
                                ((n = 1),
                                r &&
                                    (a =
                                        2 & i[0]
                                            ? r.return
                                            : i[0]
                                            ? r.throw ||
                                              ((a = r.return) && a.call(r), 0)
                                            : r.next) &&
                                    !(a = a.call(r, i[1])).done)
                            )
                                return a;
                            switch (
                                ((r = 0), a && (i = [2 & i[0], a.value]), i[0])
                            ) {
                                case 0:
                                case 1:
                                    a = i;
                                    break;
                                case 4:
                                    return o.label++, { value: i[1], done: !1 };
                                case 5:
                                    o.label++, (r = i[1]), (i = [0]);
                                    continue;
                                case 7:
                                    (i = o.ops.pop()), o.trys.pop();
                                    continue;
                                default:
                                    if (
                                        !((a = o.trys),
                                        (a = a.length > 0 && a[a.length - 1]) ||
                                            (6 !== i[0] && 2 !== i[0]))
                                    ) {
                                        o = 0;
                                        continue;
                                    }
                                    if (
                                        3 === i[0] &&
                                        (!a || (i[1] > a[0] && i[1] < a[3]))
                                    ) {
                                        o.label = i[1];
                                        break;
                                    }
                                    if (6 === i[0] && o.label < a[1]) {
                                        (o.label = a[1]), (a = i);
                                        break;
                                    }
                                    if (a && o.label < a[2]) {
                                        (o.label = a[2]), o.ops.push(i);
                                        break;
                                    }
                                    a[2] && o.ops.pop(), o.trys.pop();
                                    continue;
                            }
                            i = e.call(t, o);
                        } catch (t) {
                            (i = [6, t]), (r = 0);
                        } finally {
                            n = a = 0;
                        }
                    if (5 & i[0]) throw i[1];
                    return { value: i[0] ? i[1] : void 0, done: !0 };
                })([i, u]);
            };
        }
    }
    var K = "CompressionStream" in window;
    function Q(t) {
        return J(this, void 0, void 0, function () {
            var e, n;
            return Z(this, function (r) {
                switch (r.label) {
                    case 0:
                        return (
                            r.trys.push([0, 3, , 4]),
                            K
                                ? ((e = new ReadableStream({
                                      start: function (e) {
                                          return J(
                                              this,
                                              void 0,
                                              void 0,
                                              function () {
                                                  return Z(this, function (n) {
                                                      return (
                                                          e.enqueue(t),
                                                          e.close(),
                                                          [2]
                                                      );
                                                  });
                                              }
                                          );
                                      },
                                  })
                                      .pipeThrough(new TextEncoderStream())
                                      .pipeThrough(
                                          new window.CompressionStream("gzip")
                                      )),
                                  (n = Uint8Array.bind),
                                  [4, $(e)])
                                : [3, 2]
                        );
                    case 1:
                        return [
                            2,
                            new (n.apply(Uint8Array, [void 0, r.sent()]))(),
                        ];
                    case 2:
                        return [3, 4];
                    case 3:
                        return r.sent(), [3, 4];
                    case 4:
                        return [2, null];
                }
            });
        });
    }
    function $(t) {
        return J(this, void 0, void 0, function () {
            var e, n, r, a, i;
            return Z(this, function (o) {
                switch (o.label) {
                    case 0:
                        (e = t.getReader()),
                            (n = []),
                            (r = !1),
                            (a = []),
                            (o.label = 1);
                    case 1:
                        return r ? [3, 3] : [4, e.read()];
                    case 2:
                        return (
                            (i = o.sent()),
                            (r = i.done),
                            (a = i.value),
                            r ? [2, n] : (n.push.apply(n, a), [3, 1])
                        );
                    case 3:
                        return [2, n];
                }
            });
        });
    }
    var tt = [
        b,
        n,
        Object.freeze({
            __proto__: null,
            get data() {
                return U;
            },
            start: function () {
                G();
            },
            set: P,
            identify: B,
            compute: V,
            reset: G,
            stop: function () {
                G();
            },
        }),
        e,
        H,
        r,
        a,
        t,
        z,
        W,
    ];
    function et() {
        (E = {}),
            (S = {}),
            M(5),
            tt.forEach(function (t) {
                return ba(t.start)();
            });
    }
    function nt() {
        tt
            .slice()
            .reverse()
            .forEach(function (t) {
                return ba(t.stop)();
            }),
            (E = {}),
            (S = {});
    }
    function rt() {
        V(), m(), Br(), zr(0), L(), Yr();
    }
    function at(t, e, n, r) {
        if ((void 0 === r && (r = !1), t))
            switch (n) {
                case 0:
                    return t;
                case 1:
                    switch (e) {
                        case "*T":
                        case "value":
                        case "placeholder":
                            return (function (t) {
                                for (
                                    var e = -1,
                                        n = !1,
                                        r = !1,
                                        a = !1,
                                        i = null,
                                        o = 0;
                                    o < t.length;
                                    o++
                                ) {
                                    var u = t.charCodeAt(o);
                                    (n = n || (u >= 48 && u <= 57)),
                                        (r = r || 64 === u),
                                        (a =
                                            9 === u ||
                                            10 === u ||
                                            13 === u ||
                                            32 === u),
                                        (0 === o || o === t.length - 1 || a) &&
                                            ((n || r) &&
                                                (null === i &&
                                                    (i = t.split("")),
                                                ut(i, e, a ? o : o + 1)),
                                            a && ((n = !1), (r = !1), (e = o)));
                                }
                                return i ? i.join("") : t;
                            })(t);
                        case "input":
                            return ot(t);
                    }
                    return t;
                case 2:
                case 3:
                    switch (e) {
                        case "*T":
                            return r
                                ? (function (t) {
                                      var e = t.trim();
                                      if (e.length > 0) {
                                          var n = e[0],
                                              r = t.indexOf(n),
                                              a = t.substr(0, r),
                                              i = t.substr(r + e.length);
                                          return (
                                              "" + a + e.length.toString(36) + i
                                          );
                                      }
                                      return t;
                                  })(t)
                                : it(t);
                        case "src":
                        case "srcset":
                        case "title":
                        case "alt":
                            return 3 === n ? "" : t;
                        case "value":
                        case "click":
                        case "input":
                            return ot(t);
                        case "placeholder":
                            return it(t);
                    }
            }
        return t;
    }
    function it(t) {
        return t.replace(/\S/gi, "•");
    }
    function ot(t) {
        for (
            var e = 5 * (Math.floor(t.length / 5) + 1), n = "", r = 0;
            r < e;
            r++
        )
            n += r > 0 && r % 5 == 0 ? " " : "•";
        return n;
    }
    function ut(t, e, n) {
        for (var r = e + 1; r < n; r++) t[r] = "•";
    }
    var st = {},
        lt = [],
        ct = null,
        dt = null,
        ft = null;
    function ht() {
        (st = {}), (lt = []), (ct = null), (dt = null);
    }
    function pt(t, e) {
        return (
            void 0 === e && (e = 0),
            J(this, void 0, void 0, function () {
                var n, r, a;
                return Z(this, function (i) {
                    for (n = 0, r = lt; n < r.length; n++)
                        if (r[n].task === t) return [2];
                    return (
                        (a = new Promise(function (n) {
                            lt[1 === e ? "unshift" : "push"]({
                                task: t,
                                resolve: n,
                                id: ta(),
                            });
                        })),
                        null === ct && null === dt && vt(),
                        [2, a]
                    );
                });
            })
        );
    }
    function vt() {
        var t = lt.shift();
        t &&
            ((ct = t),
            t
                .task()
                .then(function () {
                    t.id === ta() && (t.resolve(), (ct = null), vt());
                })
                .catch(function (e) {
                    t.id === ta() &&
                        (e && Xt(0, 1, e.name, e.message, e.stack),
                        (ct = null),
                        vt());
                }));
    }
    function gt(t) {
        var e = wt(t);
        return e in st
            ? performance.now() - st[e].start > st[e].yield
                ? 0
                : 1
            : 2;
    }
    function mt(t) {
        st[wt(t)] = { start: performance.now(), calls: 0, yield: 30 };
    }
    function bt(t) {
        var e = performance.now(),
            n = wt(t),
            r = e - st[n].start;
        O(t.cost, r), M(5), st[n].calls > 0 && O(4, r);
    }
    function yt(t) {
        return J(this, void 0, void 0, function () {
            var e, n;
            return Z(this, function (r) {
                switch (r.label) {
                    case 0:
                        return (e = wt(t)) in st
                            ? (bt(t), (n = st[e]), [4, kt()])
                            : [3, 2];
                    case 1:
                        (n.yield = r.sent().timeRemaining()),
                            (function (t) {
                                var e = wt(t);
                                if (st && st[e]) {
                                    var n = st[e].calls,
                                        r = st[e].yield;
                                    mt(t),
                                        (st[e].calls = n + 1),
                                        (st[e].yield = r);
                                }
                            })(t),
                            (r.label = 2);
                    case 2:
                        return [2, e in st ? 1 : 2];
                }
            });
        });
    }
    function wt(t) {
        return t.id + "." + t.cost;
    }
    function kt() {
        return J(this, void 0, void 0, function () {
            return Z(this, function (t) {
                switch (t.label) {
                    case 0:
                        return dt ? [4, dt] : [3, 2];
                    case 1:
                        t.sent(), (t.label = 2);
                    case 2:
                        return [
                            2,
                            new Promise(function (t) {
                                St(t, { timeout: 5e3 });
                            }),
                        ];
                }
            });
        });
    }
    var Et,
        St =
            window.requestIdleCallback ||
            function (t, e) {
                var n = performance.now(),
                    r = new MessageChannel(),
                    a = r.port1,
                    i = r.port2;
                (a.onmessage = function (r) {
                    var a = performance.now(),
                        o = a - n,
                        u = a - r.data;
                    if (u > 30 && o < e.timeout)
                        requestAnimationFrame(function () {
                            i.postMessage(a);
                        });
                    else {
                        var s = o > e.timeout;
                        t({
                            didTimeout: s,
                            timeRemaining: function () {
                                return s ? 30 : Math.max(0, 30 - u);
                            },
                        });
                    }
                }),
                    requestAnimationFrame(function () {
                        i.postMessage(performance.now());
                    });
            };
    function Mt() {
        Et = null;
    }
    function Ot() {
        var t = document.body,
            e = document.documentElement,
            n = t ? t.clientWidth : null,
            r = t ? t.scrollWidth : null,
            a = t ? t.offsetWidth : null,
            i = e ? e.clientWidth : null,
            o = e ? e.scrollWidth : null,
            u = e ? e.offsetWidth : null,
            s = Math.max(n, r, a, i, o, u),
            l = t ? t.clientHeight : null,
            c = t ? t.scrollHeight : null,
            d = t ? t.offsetHeight : null,
            f = e ? e.clientHeight : null,
            h = e ? e.scrollHeight : null,
            p = e ? e.offsetHeight : null,
            v = Math.max(l, c, d, f, h, p);
        (null !== Et && s === Et.width && v === Et.height) ||
            null === s ||
            null === v ||
            ((Et = { width: s, height: v }), Nt(8));
    }
    function Nt(t, e, n) {
        return (
            void 0 === e && (e = null),
            void 0 === n && (n = null),
            J(this, void 0, void 0, function () {
                var r,
                    a,
                    o,
                    s,
                    l,
                    c,
                    d,
                    f,
                    h,
                    g,
                    m,
                    b,
                    y,
                    w,
                    k,
                    E,
                    S,
                    M,
                    O,
                    N,
                    _,
                    T,
                    x,
                    I,
                    D,
                    C;
                return Z(this, function (j) {
                    switch (j.label) {
                        case 0:
                            switch (((r = n || u()), (a = [r, t]), t)) {
                                case 8:
                                    return [3, 1];
                                case 7:
                                    return [3, 2];
                                case 37:
                                    return [3, 3];
                                case 5:
                                case 6:
                                    return [3, 4];
                            }
                            return [3, 11];
                        case 1:
                            return (
                                (o = Et),
                                a.push(o.width),
                                a.push(o.height),
                                p(t, o.width, o.height),
                                Tr(a),
                                [3, 11]
                            );
                        case 2:
                            for (s = 0, l = Ie; s < l.length; s++)
                                (c = l[s]),
                                    (a = [c.time, 7]).push(c.data.id),
                                    a.push(c.data.interaction),
                                    a.push(c.data.visibility),
                                    a.push(c.data.name),
                                    Tr(a);
                            return We(), [3, 11];
                        case 3:
                            for (d = 0, f = xt; d < f.length; d++)
                                (h = f[d]),
                                    a.push(h.id),
                                    a.push(h.width),
                                    a.push(h.height);
                            return jt(), Tr(a), [3, 11];
                        case 4:
                            if (2 === gt(e)) return [3, 11];
                            if (!((g = Ne()).length > 0)) return [3, 10];
                            (m = 0), (b = g), (j.label = 5);
                        case 5:
                            return m < b.length
                                ? ((y = b[m]),
                                  0 !== (w = gt(e)) ? [3, 7] : [4, yt(e)])
                                : [3, 9];
                        case 6:
                            (w = j.sent()), (j.label = 7);
                        case 7:
                            if (2 === w) return [3, 9];
                            for (
                                k = y.data,
                                    E = y.metadata.active,
                                    S = y.metadata.suspend,
                                    M = y.metadata.privacy,
                                    O = (function (t) {
                                        var e = t.metadata.privacy;
                                        return (
                                            "*T" === t.data.tag &&
                                            !(0 === e || 1 === e)
                                        );
                                    })(y),
                                    N = E
                                        ? ["tag", "attributes", "value"]
                                        : ["tag"],
                                    (function (t) {
                                        if (!1 === It) return;
                                        if (
                                            (Dt =
                                                null === Dt
                                                    ? new ResizeObserver(Ct)
                                                    : Dt)
                                        ) {
                                            var e = Se(t);
                                            if (
                                                e &&
                                                null !== e.metadata.size &&
                                                0 === e.metadata.size.length
                                            ) {
                                                var n = Ee(t);
                                                if (
                                                    n &&
                                                    n.nodeType ===
                                                        Node.ELEMENT_NODE
                                                ) {
                                                    var r = n,
                                                        a =
                                                            r.getBoundingClientRect();
                                                    (e.metadata.size = [
                                                        Math.floor(
                                                            100 * a.width
                                                        ),
                                                        Math.floor(
                                                            100 * a.height
                                                        ),
                                                    ]),
                                                        Dt.observe(r);
                                                }
                                            }
                                        }
                                    })(y.id),
                                    _ = 0,
                                    T = N;
                                _ < T.length;
                                _++
                            )
                                if (k[(x = T[_])])
                                    switch (x) {
                                        case "tag":
                                            (I = y.metadata.size),
                                                (D = O ? -1 : 1),
                                                a.push(y.id * D),
                                                y.parent &&
                                                    E &&
                                                    a.push(y.parent),
                                                y.previous &&
                                                    E &&
                                                    a.push(y.previous),
                                                a.push(S ? "*M" : k[x]),
                                                I &&
                                                    2 === I.length &&
                                                    a.push(
                                                        "#" +
                                                            _t(I[0]) +
                                                            "." +
                                                            _t(I[1])
                                                    );
                                            break;
                                        case "attributes":
                                            for (C in k[x])
                                                void 0 !== k[x][C] &&
                                                    a.push(Tt(C, k[x][C], M));
                                            break;
                                        case "value":
                                            a.push(at(k[x], k.tag, M, O));
                                    }
                            j.label = 8;
                        case 8:
                            return m++, [3, 5];
                        case 9:
                            6 === t && v(r),
                                Tr(
                                    (function (t) {
                                        for (
                                            var e = [],
                                                n = {},
                                                r = 0,
                                                a = null,
                                                i = 0;
                                            i < t.length;
                                            i++
                                        )
                                            if ("string" == typeof t[i]) {
                                                var o = t[i],
                                                    u = n[o] || -1;
                                                u >= 0
                                                    ? a
                                                        ? a.push(u)
                                                        : ((a = [u]),
                                                          e.push(a),
                                                          r++)
                                                    : ((a = null),
                                                      e.push(o),
                                                      (n[o] = r++));
                                            } else
                                                (a = null), e.push(t[i]), r++;
                                        return e;
                                    })(a),
                                    !i.lean
                                ),
                                (j.label = 10);
                        case 10:
                            return [3, 11];
                        case 11:
                            return [2];
                    }
                });
            })
        );
    }
    function _t(t) {
        return t.toString(36);
    }
    function Tt(t, e, n) {
        return t + "=" + at(e, t, n);
    }
    var xt = [],
        It = !1,
        Dt = null;
    function Ct(t) {
        window.requestAnimationFrame(function () {
            for (var e = 0, n = t; e < n.length; e++) {
                var r = n[e],
                    a = r.target,
                    i = a ? me(a) : null;
                if (i) {
                    var o = Se(i).metadata.size,
                        u = r.borderBoxSize,
                        s = null,
                        l = null;
                    if (u && u.length > 0)
                        (s = Math.floor(100 * u[0].inlineSize)),
                            (l = Math.floor(100 * u[0].blockSize));
                    else {
                        var c = a.getBoundingClientRect();
                        (s = Math.floor(100 * c.width)),
                            (l = Math.floor(100 * c.height));
                    }
                    s !== o[0] &&
                        l !== o[1] &&
                        ((o = [s, l]), xt.push({ id: i, width: s, height: l }));
                }
            }
            xt.length > 0 && Nt(37);
        });
    }
    function jt() {
        xt = [];
    }
    function zt() {
        jt(), Dt && (Dt.disconnect(), (Dt = null)), (It = !1);
    }
    var Rt,
        At = {};
    function Lt(t) {
        var e = t.error || t;
        if ((e.message in At || (At[e.message] = 0), At[e.message]++ >= 5))
            return !0;
        if (e && e.message) {
            if (
                ((Rt = {
                    message: e.message,
                    line: t.lineno,
                    column: t.colno,
                    stack: e.stack,
                    source: t.filename,
                }),
                e.message.indexOf("ResizeObserver") >= 0)
            )
                return zt(), !1;
            Yt(31);
        }
        return !0;
    }
    function Yt(t) {
        return J(this, void 0, void 0, function () {
            var e;
            return Z(this, function (n) {
                switch (((e = [u(), t]), t)) {
                    case 31:
                        e.push(Rt.message),
                            e.push(Rt.line),
                            e.push(Rt.column),
                            e.push(Rt.stack),
                            e.push(Rt.source),
                            Tr(e);
                        break;
                    case 33:
                        Ht &&
                            (e.push(Ht.code),
                            e.push(Ht.name),
                            e.push(Ht.message),
                            e.push(Ht.stack),
                            e.push(Ht.severity),
                            Tr(e, !1));
                }
                return [2];
            });
        });
    }
    var Ht,
        qt = {};
    function Xt(t, e, n, r, a) {
        void 0 === n && (n = null),
            void 0 === r && (r = null),
            void 0 === a && (a = null);
        var i = n ? n + "|" + r : "";
        (t in qt && qt[t].indexOf(i) >= 0) ||
            ((Ht = { code: t, name: n, message: r, stack: a, severity: e }),
            t in qt ? qt[t].push(i) : (qt[t] = [i]),
            Yt(33));
    }
    function Wt(t) {
        var e = i.upload,
            n =
                e && "string" == typeof e
                    ? e.substr(0, e.indexOf("/", "https://".length)).split(".")
                    : [],
            r = n.length >= 2 ? n.splice(-2).join(".") : null;
        r &&
            t.blockedURI &&
            t.blockedURI.indexOf(r) >= 0 &&
            "report" !== t.disposition &&
            Xt(7, 1, t.blockedURI);
    }
    var Ut = /1/g,
        Pt = /[^0-9\.]/g,
        Bt = /[^0-9\.,]/g,
        Ft = {};
    function Vt(t, e) {
        for (
            var n = function (e) {
                    var n = e[0],
                        r = e[1],
                        a = e[2],
                        i = e[3],
                        o = !0;
                    switch (a) {
                        case 0:
                            o =
                                i &&
                                !!top.location.href.match(
                                    (function (t) {
                                        return (
                                            (Ft[t] =
                                                (t in Ft)
                                                    ? Ft[t]
                                                    : new RegExp(t)),
                                            Ft[t]
                                        );
                                    })(i)
                                );
                            break;
                        case 1:
                            o = i && !!Gt(i);
                    }
                    o &&
                        t.querySelectorAll(r).forEach(function (t) {
                            return Ae(t, n.toString());
                        });
                },
                r = 0,
                a = e;
            r < a.length;
            r++
        ) {
            n(a[r]);
        }
    }
    function Gt(t, e, n) {
        void 0 === e && (e = null), void 0 === n && (n = window);
        var r = t.split("."),
            a = r.shift();
        return n && n[a]
            ? r.length > 0
                ? Gt(r.join("."), e, n[a])
                : null === e || e === typeof n[a]
                ? n[a]
                : null
            : null;
    }
    function Jt(t) {
        return t ? t.substr(0, 256) : t;
    }
    function Zt(t, e, n) {
        void 0 === n && (n = !0);
        try {
            e = e || 1;
            var r = document.documentElement.lang;
            if (Intl && Intl.NumberFormat && r && n) {
                t = t.replace(Bt, "");
                var a = Intl.NumberFormat(r).format(11111).replace(Ut, ""),
                    i = Intl.NumberFormat(r).format(1.1).replace(Ut, "");
                return Math.round(
                    parseFloat(
                        t
                            .replace(new RegExp("\\" + a, "g"), "")
                            .replace(new RegExp("\\" + i), ".")
                    ) * e
                );
            }
            return Math.round(parseFloat(t.replace(Pt, "")) * e);
        } catch (t) {
            return null;
        }
    }
    var Kt = ["DIV", "TR", "P", "LI", "UL", "A", "BUTTON"];
    function Qt(t, e) {
        void 0 === e && (e = !1);
        var n = t.attributes,
            r = t.prefix ? t.prefix[e ? 1 : 0] : null,
            a =
                e || (n && !("class" in n)) || Kt.indexOf(t.tag) >= 0
                    ? ":nth-of-type(" + t.position + ")"
                    : "";
        switch (t.tag) {
            case "STYLE":
            case "TITLE":
            case "LINK":
            case "META":
            case "*T":
            case "*D":
                return "";
            case "HTML":
                return "HTML";
            default:
                if (null === r) return "";
                (r += ">"),
                    (t.tag =
                        0 === t.tag.indexOf("svg:")
                            ? t.tag.substr("svg:".length)
                            : t.tag);
                var i = "" + r + t.tag + a,
                    o =
                        "class" in n && n.class.length > 0
                            ? n.class.trim().split(/\s+/)
                            : null;
                if (e) {
                    var u = "id" in n && n.id.length > 0 ? n.id : null;
                    (i =
                        (o =
                            "BODY" !== t.tag && o
                                ? o.filter(function (t) {
                                      return !$t(t);
                                  })
                                : []).length > 0
                            ? "" + r + t.tag + "." + o.join(".") + a
                            : i),
                        (i =
                            u && !1 === $t(u)
                                ? (function (t) {
                                      var e = t.lastIndexOf("*S"),
                                          n = t.lastIndexOf("iframe:HTML"),
                                          r = Math.max(e, n);
                                      if (r < 0) return "";
                                      var a = t.indexOf(">", r) + 1;
                                      return t.substr(0, a);
                                  })(r) +
                                  "#" +
                                  u
                                : i);
                } else i = o ? "" + r + t.tag + "." + o.join(".") + a : i;
                return i;
        }
    }
    function $t(t) {
        for (var e = 0; e < t.length; e++) {
            var n = t.charCodeAt(e);
            if (n >= 48 && n <= 57) return !0;
        }
        return !1;
    }
    var te = 1,
        ee = ["password", "hidden", "email", "tel"],
        ne = [
            "addr",
            "cell",
            "code",
            "dob",
            "email",
            "mob",
            "name",
            "phone",
            "secret",
            "social",
            "ssn",
            "tel",
            "zip",
            "pass",
            "card",
            "account",
            "cvv",
            "ccv",
        ],
        re = ["address", "password", "contact"],
        ae = [],
        ie = [],
        oe = [],
        ue = {},
        se = [],
        le = [],
        ce = null,
        de = null,
        fe = null;
    function he() {
        ve(), ge(document, !0);
    }
    function pe() {
        ve();
    }
    function ve() {
        (te = 1),
            (ae = []),
            (ie = []),
            (oe = []),
            (ue = {}),
            (se = []),
            (le = []),
            (ce = new WeakMap()),
            (de = new WeakMap()),
            (fe = new WeakMap());
    }
    function ge(t, e) {
        void 0 === e && (e = !1);
        try {
            e &&
                i.unmask.forEach(function (t) {
                    return t.indexOf("!") < 0
                        ? le.push(t)
                        : se.push(t.substr(1));
                }),
                "querySelectorAll" in t &&
                    (Vt(t, i.regions),
                    (function (t, e) {
                        for (
                            var n = function (e) {
                                    var n = e[0],
                                        r = e[1],
                                        a = e[2],
                                        i = e[3];
                                    if (a)
                                        switch (r) {
                                            case 0:
                                                t.querySelectorAll(a).forEach(
                                                    function (t) {
                                                        N(
                                                            n,
                                                            Zt(t.innerText, i)
                                                        );
                                                    }
                                                );
                                                break;
                                            case 2:
                                                t.querySelectorAll(
                                                    "[" + a + "]"
                                                ).forEach(function (t) {
                                                    N(
                                                        n,
                                                        Zt(
                                                            t.getAttribute(a),
                                                            i,
                                                            !1
                                                        )
                                                    );
                                                });
                                                break;
                                            case 1:
                                                N(n, Gt(a, "number"));
                                        }
                                },
                                r = 0,
                                a = e;
                            r < a.length;
                            r++
                        )
                            n(a[r]);
                    })(t, i.metrics),
                    (function (t, e) {
                        for (
                            var n = function (e) {
                                    var n = e[0],
                                        r = e[1],
                                        a = e[2];
                                    if (a)
                                        switch (r) {
                                            case 0:
                                                t.querySelectorAll(a).forEach(
                                                    function (t) {
                                                        Pr(n, Jt(t.innerText));
                                                    }
                                                );
                                                break;
                                            case 2:
                                                t.querySelectorAll(
                                                    "[" + a + "]"
                                                ).forEach(function (t) {
                                                    Pr(
                                                        n,
                                                        Jt(t.getAttribute(a))
                                                    );
                                                });
                                                break;
                                            case 1:
                                                Pr(n, Jt(Gt(a, "string")));
                                        }
                                },
                                r = 0,
                                a = e;
                            r < a.length;
                            r++
                        )
                            n(a[r]);
                    })(t, i.dimensions),
                    i.mask.forEach(function (e) {
                        return t.querySelectorAll(e).forEach(function (t) {
                            return fe.set(t, 3);
                        });
                    }),
                    le.forEach(function (e) {
                        return t.querySelectorAll(e).forEach(function (t) {
                            return fe.set(t, 0);
                        });
                    }));
        } catch (t) {
            Xt(5, 1, t ? t.name : null);
        }
    }
    function me(t, e) {
        if ((void 0 === e && (e = !1), null === t)) return null;
        var n = ce.get(t);
        return !n && e && ((n = te++), ce.set(t, n)), n || null;
    }
    function be(t) {
        var e = !1;
        if (t.nodeType === Node.ELEMENT_NODE && "IFRAME" === t.tagName) {
            var n = t;
            try {
                n.contentDocument && (de.set(n.contentDocument, n), (e = !0));
            } catch (t) {}
        }
        return e;
    }
    function ye(t) {
        var e = t.nodeType === Node.DOCUMENT_NODE ? t : null;
        return e && de.has(e) ? de.get(e) : null;
    }
    function we(t, e, n) {
        if ("object" == typeof t[n] && "object" == typeof e[n]) {
            for (var r in t[n]) if (t[n][r] !== e[n][r]) return !0;
            for (var r in e[n]) if (e[n][r] !== t[n][r]) return !0;
            return !1;
        }
        return t[n] !== e[n];
    }
    function ke(t) {
        var e = t.parent && t.parent in ie ? ie[t.parent] : null,
            n = e ? e.selector : null,
            r = t.data,
            a = (function (t, e) {
                e.metadata.position = 1;
                for (var n = t ? t.children.indexOf(e.id) : -1; n-- > 0; ) {
                    var r = ie[t.children[n]];
                    if (e.data.tag === r.data.tag) {
                        e.metadata.position = r.metadata.position + 1;
                        break;
                    }
                }
                return e.metadata.position;
            })(e, t),
            i = {
                tag: r.tag,
                prefix: n,
                position: a,
                attributes: r.attributes,
            };
        (t.selector = [Qt(i), Qt(i, !0)]),
            (t.hash = t.selector.map(function (t) {
                return t ? l(t) : null;
            })),
            t.hash.forEach(function (e) {
                return (ue[e] = t.id);
            });
    }
    function Ee(t) {
        return t in ae ? ae[t] : null;
    }
    function Se(t) {
        return t in ie ? ie[t] : null;
    }
    function Me(t) {
        var e = me(t);
        return e in ie ? ie[e] : null;
    }
    function Oe(t) {
        return me(t) in ae;
    }
    function Ne() {
        for (var t = [], e = 0, n = oe; e < n.length; e++) {
            var r = n[e];
            r in ie && t.push(ie[r]);
        }
        return (oe = []), t;
    }
    function _e(t) {
        for (var e = null; null === e && t.previousSibling; )
            (e = me(t.previousSibling)), (t = t.previousSibling);
        return e;
    }
    function Te(t, e, n, r) {
        void 0 === n && (n = !0), void 0 === r && (r = !1);
        var a = oe.indexOf(t);
        a >= 0 && 1 === e && r
            ? (oe.splice(a, 1), oe.push(t))
            : -1 === a && n && oe.push(t);
    }
    var xe = Object.freeze({
            __proto__: null,
            start: he,
            stop: pe,
            parse: ge,
            getId: me,
            add: function (t, e, n, r) {
                var a = me(t, !0),
                    o = e ? me(e) : null,
                    u = _e(t),
                    s = i.content ? 1 : 2,
                    l = null,
                    c = Le(t) ? a : null;
                o >= 0 &&
                    ie[o] &&
                    ((l = ie[o]).children.push(a),
                    (c = null === c ? l.region : c),
                    (s = l.metadata.privacy)),
                    (s = (function (t, e, n, r) {
                        var a = e.attributes,
                            i = e.tag.toUpperCase();
                        if (fe.has(t)) return fe.get(t);
                        if ("*T" === i && n && n.data) {
                            var o = n.selector ? n.selector[0] : "";
                            r =
                                "STYLE" === n.data.tag || "TITLE" === n.data.tag
                                    ? 0
                                    : r;
                            for (var u = 0, s = se; u < s.length; u++) {
                                var l = s[u];
                                if (o.indexOf(l) >= 0) {
                                    r = 0;
                                    break;
                                }
                            }
                        }
                        if (null == a) return r;
                        if ("class" in a && 1 === r)
                            for (var c = 0, d = re; c < d.length; c++) {
                                var f = d[c];
                                if (a.class.indexOf(f) >= 0) {
                                    r = 2;
                                    break;
                                }
                            }
                        if ("INPUT" === i)
                            if (0 === r) {
                                for (
                                    var h = "", p = 0, v = Object.keys(a);
                                    p < v.length;
                                    p++
                                ) {
                                    h += a[v[p]].toLowerCase();
                                }
                                for (var g = 0, m = ne; g < m.length; g++) {
                                    var b = m[g];
                                    if (h.indexOf(b) >= 0) {
                                        r = 2;
                                        break;
                                    }
                                }
                            } else
                                1 === r &&
                                    (r = a && "submit" === a.type ? 0 : 2);
                        "type" in a && ee.indexOf(a.type) >= 0 && (r = 2);
                        "data-clarity-mask" in a && (r = 3);
                        "data-clarity-unmask" in a && (r = 0);
                        return r;
                    })(t, n, l, s)),
                    n.attributes &&
                        "data-clarity-region" in n.attributes &&
                        (Ae(t, n.attributes["data-clarity-region"]), (c = a)),
                    (ae[a] = t),
                    (ie[a] = {
                        id: a,
                        parent: o,
                        previous: u,
                        children: [],
                        data: n,
                        selector: null,
                        hash: null,
                        region: c,
                        metadata: {
                            active: !0,
                            suspend: !1,
                            privacy: s,
                            position: null,
                            size: null,
                        },
                    }),
                    ke(ie[a]),
                    (function (t, e) {
                        var n = t.data,
                            r =
                                "*T" === n.tag &&
                                n.value &&
                                n.value.length > 15,
                            a =
                                2 === t.metadata.privacy ||
                                3 === t.metadata.privacy;
                        r &&
                            a &&
                            e &&
                            null === e.metadata.size &&
                            (e.metadata.size = []);
                        "IMG" === n.tag &&
                            3 === t.metadata.privacy &&
                            (t.metadata.size = []);
                    })(ie[a], l),
                    Te(a, r);
            },
            update: function (t, e, n, r) {
                var a = me(t),
                    i = e ? me(e) : null,
                    o = _e(t),
                    u = !1,
                    s = !1;
                if (a in ie) {
                    var l = ie[a];
                    if (
                        ((l.metadata.active = !0),
                        l.previous !== o && ((u = !0), (l.previous = o)),
                        l.parent !== i)
                    ) {
                        u = !0;
                        var c = l.parent;
                        if (((l.parent = i), null !== i && i >= 0)) {
                            var d =
                                null === o ? 0 : ie[i].children.indexOf(o) + 1;
                            ie[i].children.splice(d, 0, a),
                                (l.region = Le(t) ? a : ie[i].region);
                        } else
                            !(function (t, e) {
                                if (t in ie) {
                                    var n = ie[t];
                                    (n.metadata.active = !1),
                                        (n.parent = null),
                                        Te(t, e);
                                }
                            })(a, r);
                        if (null !== c && c >= 0) {
                            var f = ie[c].children.indexOf(a);
                            f >= 0 && ie[c].children.splice(f, 1);
                        }
                        s = !0;
                    }
                    for (var h in n)
                        we(l.data, n, h) && ((u = !0), (l.data[h] = n[h]));
                    ke(l), Te(a, r, u, s);
                }
            },
            sameorigin: be,
            iframe: ye,
            getNode: Ee,
            getValue: Se,
            get: Me,
            lookup: function (t) {
                return t in ue ? ue[t] : null;
            },
            has: Oe,
            updates: Ne,
        }),
        Ie = [],
        De = null,
        Ce = {},
        je = [],
        ze = !1,
        Re = null;
    function Ae(t, e) {
        !1 === De.has(t) &&
            (De.set(t, e),
            (Re =
                null === Re && ze
                    ? new IntersectionObserver(He, {
                          threshold: [0, 0.2, 0.4, 0.6, 0.8, 1],
                      })
                    : Re) &&
                t &&
                t.nodeType === Node.ELEMENT_NODE &&
                Re.observe(t));
    }
    function Le(t) {
        return De && De.has(t);
    }
    function Ye() {
        for (var t = [], e = 0, n = je; e < n.length; e++) {
            var r = n[e],
                a = me(r.node);
            a in Ce ||
                (a
                    ? ((r.data.id = a), (Ce[a] = r.data), Ie.push(Xe(r.data)))
                    : t.push(r));
        }
        (je = t), Ie.length > 0 && Nt(7);
    }
    function He(t) {
        for (var e = 0, n = t; e < n.length; e++) {
            var r = n[e],
                a = r.target,
                i = r.boundingClientRect,
                o = r.intersectionRect,
                u = r.rootBounds;
            if (
                De.has(a) &&
                i.width + i.height > 0 &&
                u.width > 0 &&
                u.height > 0
            ) {
                var s = a ? me(a) : null,
                    l =
                        s in Ce
                            ? Ce[s]
                            : {
                                  id: s,
                                  name: De.get(a),
                                  interaction: 16,
                                  visibility: 0,
                              },
                    c =
                        (o
                            ? (o.width * o.height * 1) / (u.width * u.height)
                            : 0) > 0.05 || r.intersectionRatio > 0.8,
                    d =
                        (c || 10 == l.visibility) &&
                        Math.abs(i.top) + u.height > i.height;
                qe(a, l, l.interaction, d ? 13 : c ? 10 : 0),
                    l.visibility >= 13 && Re && Re.unobserve(a);
            }
        }
        Ie.length > 0 && Nt(7);
    }
    function qe(t, e, n, r) {
        var a = n > e.interaction || r > e.visibility;
        (e.interaction = n > e.interaction ? n : e.interaction),
            (e.visibility = r > e.visibility ? r : e.visibility),
            e.id
                ? ((e.id in Ce && a) || !(e.id in Ce)) &&
                  ((Ce[e.id] = e), Ie.push(Xe(e)))
                : je.push({ node: t, data: e });
    }
    function Xe(t) {
        return {
            time: u(),
            data: {
                id: t.id,
                interaction: t.interaction,
                visibility: t.visibility,
                name: t.name,
            },
        };
    }
    function We() {
        Ie = [];
    }
    function Ue(t) {
        var e = { x: 0, y: 0 };
        if (t && t.offsetParent)
            do {
                var n = t.offsetParent,
                    r = null === n ? ye(t.ownerDocument) : null;
                (e.x += t.offsetLeft), (e.y += t.offsetTop), (t = r || n);
            } while (t);
        return e;
    }
    var Pe = ["input", "textarea", "radio", "button", "canvas"],
        Be = [];
    function Fe(t) {
        wa(t, "click", Ve.bind(this, 9, t), !0);
    }
    function Ve(t, e, n) {
        var r = ye(e),
            a = r
                ? r.contentDocument.documentElement
                : document.documentElement,
            i =
                "pageX" in n
                    ? Math.round(n.pageX)
                    : "clientX" in n
                    ? Math.round(n.clientX + a.scrollLeft)
                    : null,
            o =
                "pageY" in n
                    ? Math.round(n.pageY)
                    : "clientY" in n
                    ? Math.round(n.clientY + a.scrollTop)
                    : null;
        if (r) {
            var s = Ue(r);
            (i = i ? i + Math.round(s.x) : i),
                (o = o ? o + Math.round(s.y) : o);
        }
        var l = cr(n),
            c = (function (t) {
                for (; t && t !== document; ) {
                    if (t.nodeType === Node.ELEMENT_NODE) {
                        var e = t;
                        if ("A" === e.tagName) return e;
                    }
                    t = t.parentNode;
                }
                return null;
            })(l),
            d = (function (t) {
                var e = null,
                    n = document.documentElement;
                if ("function" == typeof t.getBoundingClientRect) {
                    var r = t.getBoundingClientRect();
                    r &&
                        r.width > 0 &&
                        r.height > 0 &&
                        (e = {
                            x: Math.floor(
                                r.left +
                                    ("pageXOffset" in window
                                        ? window.pageXOffset
                                        : n.scrollLeft)
                            ),
                            y: Math.floor(
                                r.top +
                                    ("pageYOffset" in window
                                        ? window.pageYOffset
                                        : n.scrollTop)
                            ),
                            w: Math.floor(r.width),
                            h: Math.floor(r.height),
                        });
                }
                return e;
            })(l);
        0 === n.detail &&
            d &&
            ((i = Math.round(d.x + d.w / 2)), (o = Math.round(d.y + d.h / 2)));
        var f = d ? Math.max(Math.floor(((i - d.x) / d.w) * 32767), 0) : 0,
            h = d ? Math.max(Math.floor(((o - d.y) / d.h) * 32767), 0) : 0;
        null !== i &&
            null !== o &&
            (Be.push({
                time: u(),
                event: t,
                data: {
                    target: l,
                    x: i,
                    y: o,
                    eX: f,
                    eY: h,
                    button: n.button,
                    reaction: Je(l),
                    context: Ze(c),
                    text: Ge(l),
                    link: c ? c.href : null,
                    hash: null,
                },
            }),
            pt(fr.bind(this, t)));
    }
    function Ge(t) {
        var e = null;
        if (t) {
            var n = t.textContent || t.value || t.alt;
            n && (e = n.trim().replace(/\s+/g, " ").substr(0, 25));
        }
        return e;
    }
    function Je(t) {
        if (t.nodeType === Node.ELEMENT_NODE) {
            var e = t.tagName.toLowerCase();
            if (Pe.indexOf(e) >= 0) return 0;
        }
        return 1;
    }
    function Ze(t) {
        if (t && t.hasAttribute("target"))
            switch (t.getAttribute("target")) {
                case "_blank":
                    return 1;
                case "_parent":
                    return 2;
                case "_top":
                    return 3;
            }
        return 0;
    }
    function Ke() {
        Be = [];
    }
    var Qe = [];
    function $e(t, e) {
        Qe.push({ time: u(), event: 38, data: { target: cr(e), action: t } }),
            pt(fr.bind(this, 38));
    }
    function tn() {
        Qe = [];
    }
    var en = null,
        nn = [];
    function rn(t) {
        var e = cr(t),
            n = Me(e);
        if (e && e.type && n) {
            var r = void 0;
            switch (e.type) {
                case "radio":
                case "checkbox":
                    r = e.checked ? "true" : "false";
                    break;
                case "range":
                    r = e.value;
                    break;
                default:
                    r = at(e.value, "input", n.metadata.privacy);
            }
            var a = { target: e, value: r };
            nn.length > 0 &&
                nn[nn.length - 1].data.target === a.target &&
                nn.pop(),
                nn.push({ time: u(), event: 27, data: a }),
                T(en),
                (en = _(an, 500, 27));
        }
    }
    function an(t) {
        pt(fr.bind(this, t));
    }
    function on() {
        nn = [];
    }
    var un,
        sn = [],
        ln = null;
    function cn(t, e, n) {
        var r = ye(e),
            a = r
                ? r.contentDocument.documentElement
                : document.documentElement,
            i =
                "pageX" in n
                    ? Math.round(n.pageX)
                    : "clientX" in n
                    ? Math.round(n.clientX + a.scrollLeft)
                    : null,
            o =
                "pageY" in n
                    ? Math.round(n.pageY)
                    : "clientY" in n
                    ? Math.round(n.clientY + a.scrollTop)
                    : null;
        if (r) {
            var s = Ue(r);
            (i = i ? i + Math.round(s.x) : i),
                (o = o ? o + Math.round(s.y) : o);
        }
        null !== i &&
            null !== o &&
            fn({ time: u(), event: t, data: { target: cr(n), x: i, y: o } });
    }
    function dn(t, e, n) {
        var r = ye(e),
            a = r
                ? r.contentDocument.documentElement
                : document.documentElement,
            i = n.changedTouches,
            o = u();
        if (i)
            for (var s = 0; s < i.length; s++) {
                var l = i[s],
                    c =
                        "clientX" in l
                            ? Math.round(l.clientX + a.scrollLeft)
                            : null,
                    d =
                        "clientY" in l
                            ? Math.round(l.clientY + a.scrollTop)
                            : null;
                (c = c && r ? c + Math.round(r.offsetLeft) : c),
                    (d = d && r ? d + Math.round(r.offsetTop) : d),
                    null !== c &&
                        null !== d &&
                        fn({
                            time: o,
                            event: t,
                            data: { target: cr(n), x: c, y: d },
                        });
            }
    }
    function fn(t) {
        switch (t.event) {
            case 12:
            case 15:
            case 19:
                var e = sn.length,
                    n = e > 1 ? sn[e - 2] : null;
                n &&
                    (function (t, e) {
                        var n = t.data.x - e.data.x,
                            r = t.data.y - e.data.y,
                            a = Math.sqrt(n * n + r * r),
                            i = e.time - t.time,
                            o = e.data.target === t.data.target;
                        return e.event === t.event && o && a < 20 && i < 25;
                    })(n, t) &&
                    sn.pop(),
                    sn.push(t),
                    T(ln),
                    (ln = _(hn, 500, t.event));
                break;
            default:
                sn.push(t), hn(t.event);
        }
    }
    function hn(t) {
        pt(fr.bind(this, t));
    }
    function pn() {
        sn = [];
    }
    function vn() {
        var t = document.documentElement;
        (un = {
            width:
                t && "clientWidth" in t
                    ? Math.min(t.clientWidth, window.innerWidth)
                    : window.innerWidth,
            height:
                t && "clientHeight" in t
                    ? Math.min(t.clientHeight, window.innerHeight)
                    : window.innerHeight,
        }),
            fr(11);
    }
    function gn() {
        un = null;
    }
    var mn = [],
        bn = null;
    function yn(t) {
        void 0 === t && (t = null);
        var e = window,
            n = document.documentElement,
            r = t ? cr(t) : n;
        if (r && r.nodeType === Node.DOCUMENT_NODE) {
            var a = ye(r);
            (e = a ? a.contentWindow : e), (r = n = r.documentElement);
        }
        var i =
                r === n && "pageXOffset" in e
                    ? Math.round(e.pageXOffset)
                    : Math.round(r.scrollLeft),
            o =
                r === n && "pageYOffset" in e
                    ? Math.round(e.pageYOffset)
                    : Math.round(r.scrollTop),
            s = { time: u(), event: 10, data: { target: r, x: i, y: o } };
        if ((null !== t || 0 !== i || 0 !== o) && null !== i && null !== o) {
            var l = mn.length,
                c = l > 1 ? mn[l - 2] : null;
            c &&
                (function (t, e) {
                    var n = t.data.x - e.data.x,
                        r = t.data.y - e.data.y;
                    return n * n + r * r < 400 && e.time - t.time < 25;
                })(c, s) &&
                mn.pop(),
                mn.push(s),
                T(bn),
                (bn = _(wn, 500, 10));
        }
    }
    function wn(t) {
        pt(fr.bind(this, t));
    }
    var kn = null,
        En = null,
        Sn = null;
    function Mn(t) {
        var e = (
            t.nodeType === Node.DOCUMENT_NODE ? t : document
        ).getSelection();
        if (
            null !== e &&
            !(
                (null === e.anchorNode && null === e.focusNode) ||
                (e.anchorNode === e.focusNode &&
                    e.anchorOffset === e.focusOffset)
            )
        ) {
            var n = kn.start ? kn.start : null;
            null !== En &&
                null !== kn.start &&
                n !== e.anchorNode &&
                (T(Sn), On(21)),
                (kn = {
                    start: e.anchorNode,
                    startOffset: e.anchorOffset,
                    end: e.focusNode,
                    endOffset: e.focusOffset,
                }),
                (En = e),
                T(Sn),
                (Sn = _(On, 500, 21));
        }
    }
    function On(t) {
        pt(fr.bind(this, t));
    }
    function Nn() {
        (En = null), (kn = { start: 0, startOffset: 0, end: 0, endOffset: 0 });
    }
    var _n,
        Tn,
        xn = [];
    function In(t) {
        xn.push({ time: u(), event: 39, data: { target: cr(t) } }),
            pt(fr.bind(this, 39));
    }
    function Dn() {
        xn = [];
    }
    function Cn(t) {
        (_n = { name: t.type }), fr(26), Fa();
    }
    function jn() {
        _n = null;
    }
    function zn() {
        (Tn = {
            visible:
                "visibilityState" in document
                    ? document.visibilityState
                    : "default",
        }),
            fr(28);
    }
    function Rn() {
        Tn = null;
    }
    function An(t) {
        !(function (t) {
            var e = ye(t);
            wa(
                e ? e.contentWindow : t === document ? window : t,
                "scroll",
                yn,
                !0
            );
        })(t),
            t.nodeType === Node.DOCUMENT_NODE &&
                (Fe(t),
                (function (t) {
                    wa(t, "cut", $e.bind(this, 0), !0),
                        wa(t, "copy", $e.bind(this, 1), !0),
                        wa(t, "paste", $e.bind(this, 2), !0);
                })(t),
                (function (t) {
                    wa(t, "mousedown", cn.bind(this, 13, t), !0),
                        wa(t, "mouseup", cn.bind(this, 14, t), !0),
                        wa(t, "mousemove", cn.bind(this, 12, t), !0),
                        wa(t, "mousewheel", cn.bind(this, 15, t), !0),
                        wa(t, "dblclick", cn.bind(this, 16, t), !0),
                        wa(t, "touchstart", dn.bind(this, 17, t), !0),
                        wa(t, "touchend", dn.bind(this, 18, t), !0),
                        wa(t, "touchmove", dn.bind(this, 19, t), !0),
                        wa(t, "touchcancel", dn.bind(this, 20, t), !0);
                })(t),
                (function (t) {
                    wa(t, "input", rn, !0);
                })(t),
                (function (t) {
                    wa(t, "selectstart", Mn.bind(this, t), !0),
                        wa(t, "selectionchange", Mn.bind(this, t), !0);
                })(t),
                (function (t) {
                    wa(t, "submit", In, !0);
                })(t));
    }
    var Ln = Object.freeze({
            __proto__: null,
            start: function () {
                (hr = []),
                    vr(),
                    Ke(),
                    tn(),
                    pn(),
                    on(),
                    wa(window, "resize", vn),
                    vn(),
                    wa(document, "visibilitychange", zn),
                    zn(),
                    (mn = []),
                    yn(),
                    Nn(),
                    Dn(),
                    wa(window, "pagehide", Cn);
            },
            stop: function () {
                (hr = []),
                    vr(),
                    Ke(),
                    tn(),
                    T(ln),
                    sn.length > 0 && hn(sn[sn.length - 1].event),
                    T(en),
                    on(),
                    gn(),
                    Rn(),
                    T(bn),
                    (mn = []),
                    Nn(),
                    T(Sn),
                    Dn(),
                    jn();
            },
            observe: An,
        }),
        Yn = /[^0-9\.]/g;
    function Hn(t) {
        for (var e = 0, n = Object.keys(t); e < n.length; e++) {
            var r = n[e],
                a = t[r];
            if ("@type" === r && "string" == typeof a)
                switch (
                    (a =
                        (a = a.toLowerCase()).indexOf("article") >= 0 ||
                        a.indexOf("posting") >= 0
                            ? "article"
                            : a)
                ) {
                    case "article":
                    case "recipe":
                        Pr(5, t[r]), Pr(8, t.creator), Pr(18, t.headline);
                        break;
                    case "product":
                        Pr(5, t[r]),
                            Pr(10, t.name),
                            Pr(12, t.sku),
                            t.brand && Pr(6, t.brand.name);
                        break;
                    case "aggregaterating":
                        t.ratingValue &&
                            (N(11, qn(t.ratingValue, 100)),
                            N(18, qn(t.bestRating)),
                            N(19, qn(t.worstRating))),
                            N(12, qn(t.ratingCount)),
                            N(17, qn(t.reviewCount));
                        break;
                    case "person":
                        Pr(8, t.name);
                        break;
                    case "offer":
                        Pr(7, t.availability),
                            Pr(14, t.itemCondition),
                            Pr(13, t.priceCurrency),
                            Pr(12, t.sku),
                            N(13, qn(t.price));
                        break;
                    case "brand":
                        Pr(6, t.name);
                }
            null !== a && "object" == typeof a && Hn(a);
        }
    }
    function qn(t, e) {
        if ((void 0 === e && (e = 1), null !== t))
            switch (typeof t) {
                case "number":
                    return Math.round(t * e);
                case "string":
                    return Math.round(parseFloat(t.replace(Yn, "")) * e);
            }
        return null;
    }
    var Xn = ["title", "alt", "onload", "onfocus", "onerror"],
        Wn = /[\r\n]+/g;
    function Un(t, e) {
        var n = null;
        if (2 === e && !1 === Oe(t)) return n;
        0 !== e &&
            t.nodeType === Node.TEXT_NODE &&
            t.parentElement &&
            "STYLE" === t.parentElement.tagName &&
            (t = t.parentNode);
        var r = !1 === Oe(t) ? "add" : "update",
            a = t.parentElement ? t.parentElement : null,
            i = t.ownerDocument !== document;
        switch (t.nodeType) {
            case Node.DOCUMENT_TYPE_NODE:
                a = i && t.parentNode ? ye(t.parentNode) : a;
                var o = t,
                    u = {
                        tag: (i ? "iframe:" : "") + "*D",
                        attributes: {
                            name: o.name,
                            publicId: o.publicId,
                            systemId: o.systemId,
                        },
                    };
                xe[r](t, a, u, e);
                break;
            case Node.DOCUMENT_NODE:
                t === document && ge(document), Pn(t);
                break;
            case Node.DOCUMENT_FRAGMENT_NODE:
                var s = t;
                if (s.host)
                    if (
                        (ge(s),
                        "function" === typeof s.constructor &&
                            s.constructor.toString().indexOf("[native code]") >=
                                0)
                    ) {
                        Pn(s);
                        for (
                            var l = "",
                                c = 0,
                                d =
                                    ("adoptedStyleSheets" in s)
                                        ? s.adoptedStyleSheets
                                        : [];
                            c < d.length;
                            c++
                        ) {
                            l += Fn(d[c]);
                        }
                        var f = { tag: "*S", attributes: { style: l } };
                        xe[r](t, s.host, f, e);
                    } else xe[r](t, s.host, { tag: "*P", attributes: {} }, e);
                break;
            case Node.TEXT_NODE:
                if (
                    ((a = a || t.parentNode),
                    "update" === r || (a && Oe(a) && "STYLE" !== a.tagName))
                ) {
                    var h = { tag: "*T", value: t.nodeValue };
                    xe[r](t, a, h, e);
                }
                break;
            case Node.ELEMENT_NODE:
                var p = t,
                    v = p.tagName,
                    g = (function (t) {
                        var e = {},
                            n = t.attributes;
                        if (n && n.length > 0)
                            for (var r = 0; r < n.length; r++) {
                                var a = n[r].name;
                                Xn.indexOf(a) < 0 && (e[a] = n[r].value);
                            }
                        "INPUT" === t.tagName &&
                            !("value" in e) &&
                            t.value &&
                            (e.value = t.value);
                        return e;
                    })(p);
                switch (
                    ((a = t.parentElement
                        ? t.parentElement
                        : t.parentNode
                        ? t.parentNode
                        : null),
                    "http://www.w3.org/2000/svg" === p.namespaceURI &&
                        (v = "svg:" + v),
                    v)
                ) {
                    case "HTML":
                        a = i && a ? ye(a) : null;
                        var m = {
                            tag: (i ? "iframe:" : "") + v,
                            attributes: g,
                        };
                        xe[r](t, a, m, e);
                        break;
                    case "SCRIPT":
                        if ("type" in g && "application/ld+json" === g.type)
                            try {
                                Hn(JSON.parse(p.text.replace(Wn, "")));
                            } catch (t) {}
                        break;
                    case "NOSCRIPT":
                        break;
                    case "META":
                        var b =
                            "property" in g
                                ? "property"
                                : "name" in g
                                ? "name"
                                : null;
                        if (b && "content" in g) {
                            var y = g.content;
                            switch (g[b]) {
                                case "og:title":
                                    Pr(20, y);
                                    break;
                                case "og:type":
                                    Pr(19, y);
                                    break;
                                case "generator":
                                    Pr(21, y);
                            }
                        }
                        break;
                    case "HEAD":
                        var w = { tag: v, attributes: g };
                        location &&
                            (w.attributes["*B"] =
                                location.protocol + "//" + location.hostname),
                            xe[r](t, a, w, e);
                        break;
                    case "STYLE":
                        var k = { tag: v, attributes: g, value: Bn(p) };
                        xe[r](t, a, k, e);
                        break;
                    case "IFRAME":
                        var E = t,
                            S = { tag: v, attributes: g };
                        be(E) &&
                            (!(function (t) {
                                !1 === Oe(t) &&
                                    wa(
                                        t,
                                        "load",
                                        lr.bind(this, t, "childList"),
                                        !0
                                    );
                            })(E),
                            (S.attributes["*O"] = "true"),
                            E.contentDocument &&
                                E.contentWindow &&
                                "loading" !== E.contentDocument.readyState &&
                                (n = E.contentDocument)),
                            xe[r](t, a, S, e);
                        break;
                    default:
                        var M = { tag: v, attributes: g };
                        p.shadowRoot && (n = p.shadowRoot), xe[r](t, a, M, e);
                }
        }
        return n;
    }
    function Pn(t) {
        Oe(t) ||
            (!(function (t) {
                try {
                    var e =
                            window.Zone && "__symbol__" in window.Zone
                                ? window.Zone.__symbol__("MutationObserver")
                                : "MutationObserver",
                        n = e in window ? new window[e](ba(rr)) : null;
                    n &&
                        (n.observe(t, {
                            attributes: !0,
                            childList: !0,
                            characterData: !0,
                            subtree: !0,
                        }),
                        Gn.push(n));
                } catch (t) {
                    Xt(2, 0, t ? t.name : null);
                }
            })(t),
            An(t));
    }
    function Bn(t) {
        var e = t.textContent ? t.textContent.trim() : "",
            n = t.dataset ? Object.keys(t.dataset).length : 0;
        return (0 === e.length || n > 0) && (e = Fn(t.sheet)), e;
    }
    function Fn(t) {
        var e = "",
            n = null;
        try {
            n = t ? t.cssRules : [];
        } catch (t) {
            if ((Xt(1, 1, t ? t.name : null), t && "SecurityError" !== t.name))
                throw t;
        }
        if (null !== n) for (var r = 0; r < n.length; r++) e += n[r].cssText;
        return e;
    }
    function Vn(t, e, n) {
        return J(this, void 0, void 0, function () {
            var r, a, i, o, u;
            return Z(this, function (s) {
                switch (s.label) {
                    case 0:
                        (r = [t]), (s.label = 1);
                    case 1:
                        if (!(r.length > 0)) return [3, 4];
                        for (a = r.shift(), i = a.firstChild; i; )
                            r.push(i), (i = i.nextSibling);
                        return 0 !== (o = gt(e)) ? [3, 3] : [4, yt(e)];
                    case 2:
                        (o = s.sent()), (s.label = 3);
                    case 3:
                        return 2 === o
                            ? [3, 4]
                            : ((u = Un(a, n)) && r.push(u), [3, 1]);
                    case 4:
                        return [2];
                }
            });
        });
    }
    var Gn = [],
        Jn = [],
        Zn = null,
        Kn = null,
        Qn = null,
        $n = [],
        tr = null,
        er = null,
        nr = {};
    function rr(t) {
        var e = u();
        A(6, e),
            Jn.push({ time: e, mutations: t }),
            pt(ar, 1).then(function () {
                ba(Ot)(), ba(Ye)();
            });
    }
    function ar() {
        return J(this, void 0, void 0, function () {
            var t, e, n, r, a, i, o, s, l;
            return Z(this, function (c) {
                switch (c.label) {
                    case 0:
                        mt((t = { id: ta(), cost: 3 })), (c.label = 1);
                    case 1:
                        if (!(Jn.length > 0)) return [3, 8];
                        (e = Jn.shift()),
                            (n = 0),
                            (r = e.mutations),
                            (c.label = 2);
                    case 2:
                        return n < r.length
                            ? ((a = r[n]),
                              0 !== (i = gt(t)) ? [3, 4] : [4, yt(t)])
                            : [3, 6];
                    case 3:
                        (i = c.sent()), (c.label = 4);
                    case 4:
                        if (2 === i) return [3, 6];
                        switch (
                            ((o = a.target),
                            (s = (function (t, e) {
                                var n = t.target
                                    ? Me(t.target.parentNode)
                                    : null;
                                if (n && "HTML" !== n.data.tag) {
                                    var r = u() > er,
                                        a = Me(t.target),
                                        i =
                                            a && a.selector
                                                ? a.selector.join()
                                                : t.target.nodeName,
                                        o = [
                                            n.selector ? n.selector.join() : "",
                                            i,
                                            t.attributeName,
                                            ir(t.addedNodes),
                                            ir(t.removedNodes),
                                        ].join();
                                    nr[o] = o in nr ? nr[o] : [0];
                                    var s = nr[o];
                                    if (
                                        (!1 === r &&
                                            s[0] >= 10 &&
                                            or(s[1], 2, e),
                                        (s[0] = r ? s[0] + 1 : 1),
                                        10 === s[0])
                                    )
                                        return (
                                            (s[1] = t.removedNodes), "suspend"
                                        );
                                    if (s[0] > 10) return "";
                                }
                                return t.type;
                            })(a, t)) &&
                                o &&
                                o.ownerDocument &&
                                ge(o.ownerDocument),
                            s &&
                                o &&
                                o.nodeType == Node.DOCUMENT_FRAGMENT_NODE &&
                                o.host &&
                                ge(o),
                            s)
                        ) {
                            case "attributes":
                                Un(o, 3);
                                break;
                            case "characterData":
                                Un(o, 4);
                                break;
                            case "childList":
                                or(a.addedNodes, 1, t),
                                    or(a.removedNodes, 2, t);
                                break;
                            case "suspend":
                                (l = Me(o)) && (l.metadata.suspend = !0);
                        }
                        c.label = 5;
                    case 5:
                        return n++, [3, 2];
                    case 6:
                        return [4, Nt(6, t, e.time)];
                    case 7:
                        return c.sent(), [3, 1];
                    case 8:
                        return bt(t), [2];
                }
            });
        });
    }
    function ir(t) {
        for (var e = [], n = 0; t && n < t.length; n++) e.push(t[n].nodeName);
        return e.join();
    }
    function or(t, e, n) {
        return J(this, void 0, void 0, function () {
            var r, a, i;
            return Z(this, function (o) {
                switch (o.label) {
                    case 0:
                        (r = t ? t.length : 0), (a = 0), (o.label = 1);
                    case 1:
                        return a < r
                            ? 1 !== e
                                ? [3, 2]
                                : (Vn(t[a], n, e), [3, 5])
                            : [3, 6];
                    case 2:
                        return 0 !== (i = gt(n)) ? [3, 4] : [4, yt(n)];
                    case 3:
                        (i = o.sent()), (o.label = 4);
                    case 4:
                        if (2 === i) return [3, 6];
                        Un(t[a], e), (o.label = 5);
                    case 5:
                        return a++, [3, 1];
                    case 6:
                        return [2];
                }
            });
        });
    }
    function ur(t) {
        return (
            $n.indexOf(t) < 0 && $n.push(t), tr && T(tr), (tr = _(sr, 33)), t
        );
    }
    function sr() {
        for (var t = 0, e = $n; t < e.length; t++) {
            var n = e[t],
                r = n && n.nodeType === Node.DOCUMENT_FRAGMENT_NODE;
            (r && Oe(n)) || lr(n, r ? "childList" : "characterData");
        }
        $n = [];
    }
    function lr(t, e) {
        ba(rr)([
            {
                addedNodes: [t],
                attributeName: null,
                attributeNamespace: null,
                nextSibling: null,
                oldValue: null,
                previousSibling: null,
                removedNodes: [],
                target: t,
                type: e,
            },
        ]);
    }
    function cr(t) {
        var e = t.composed && t.composedPath ? t.composedPath() : null,
            n = e && e.length > 0 ? e[0] : t.target;
        return (
            (er = u() + 3e3),
            n.nodeType === Node.DOCUMENT_NODE ? n.documentElement : n
        );
    }
    function dr(t, e) {
        var n = { id: 0, hash: null, privacy: 2, node: t };
        if (t) {
            var r = Me(t);
            null !== r &&
                ((n.id = r.id),
                (n.hash = r.hash),
                (n.privacy = r.metadata.privacy),
                r.region &&
                    (function (t, e) {
                        var n = Ee(t),
                            r =
                                t in Ce
                                    ? Ce[t]
                                    : {
                                          id: t,
                                          visibility: 0,
                                          interaction: 16,
                                          name: De.get(n),
                                      },
                            a = 16;
                        switch (e) {
                            case 9:
                                a = 20;
                                break;
                            case 27:
                                a = 30;
                        }
                        qe(n, r, a, r.visibility);
                    })(r.region, e));
        }
        return n;
    }
    function fr(t) {
        return J(this, void 0, void 0, function () {
            var e,
                n,
                r,
                a,
                i,
                o,
                s,
                l,
                c,
                d,
                f,
                h,
                v,
                m,
                b,
                y,
                w,
                k,
                E,
                S,
                M,
                O,
                N,
                _,
                T,
                x,
                I,
                D,
                C;
            return Z(this, function (j) {
                switch (((e = u()), (n = [e, t]), t)) {
                    case 13:
                    case 14:
                    case 12:
                    case 15:
                    case 16:
                    case 17:
                    case 18:
                    case 19:
                    case 20:
                        for (r = 0, a = sn; r < a.length; r++)
                            (D = a[r]),
                                (i = dr(D.data.target, D.event)).id > 0 &&
                                    ((n = [D.time, D.event]).push(i.id),
                                    n.push(D.data.x),
                                    n.push(D.data.y),
                                    Tr(n),
                                    p(D.event, D.data.x, D.data.y));
                        pn();
                        break;
                    case 9:
                        for (o = 0, s = Be; o < s.length; o++)
                            (D = s[o]),
                                (l = dr(D.data.target, D.event)),
                                (n = [D.time, D.event]),
                                (c = l.hash.join(".")),
                                n.push(l.id),
                                n.push(D.data.x),
                                n.push(D.data.y),
                                n.push(D.data.eX),
                                n.push(D.data.eY),
                                n.push(D.data.button),
                                n.push(D.data.reaction),
                                n.push(D.data.context),
                                n.push(at(D.data.text, "click", l.privacy)),
                                n.push(D.data.link),
                                n.push(c),
                                Tr(n),
                                gr(
                                    D.time,
                                    D.event,
                                    c,
                                    D.data.x,
                                    D.data.y,
                                    D.data.reaction,
                                    D.data.context
                                );
                        Ke();
                        break;
                    case 38:
                        for (d = 0, f = Qe; d < f.length; d++)
                            (D = f[d]),
                                (n = [D.time, D.event]),
                                (T = dr(D.data.target, D.event)).id > 0 &&
                                    (n.push(T.id),
                                    n.push(D.data.action),
                                    Tr(n));
                        tn();
                        break;
                    case 11:
                        (h = un),
                            n.push(h.width),
                            n.push(h.height),
                            p(t, h.width, h.height),
                            gn(),
                            Tr(n);
                        break;
                    case 26:
                        (v = _n), n.push(v.name), jn(), Tr(n);
                        break;
                    case 27:
                        for (m = 0, b = nn; m < b.length; m++)
                            (D = b[m]),
                                (y = dr(D.data.target, D.event)),
                                (n = [D.time, D.event]).push(y.id),
                                n.push(D.data.value),
                                Tr(n);
                        on();
                        break;
                    case 21:
                        (w = kn) &&
                            ((k = dr(w.start, t)),
                            (E = dr(w.end, t)),
                            n.push(k.id),
                            n.push(w.startOffset),
                            n.push(E.id),
                            n.push(w.endOffset),
                            Nn(),
                            Tr(n));
                        break;
                    case 10:
                        for (S = 0, M = mn; S < M.length; S++)
                            (D = M[S]),
                                (O = dr(D.data.target, D.event)).id > 0 &&
                                    ((n = [D.time, D.event]).push(O.id),
                                    n.push(D.data.x),
                                    n.push(D.data.y),
                                    Tr(n),
                                    p(D.event, D.data.x, D.data.y));
                        mn = [];
                        break;
                    case 39:
                        for (N = 0, _ = xn; N < _.length; N++)
                            (D = _[N]),
                                (n = [D.time, D.event]),
                                (T = dr(D.data.target, D.event)).id > 0 &&
                                    (n.push(T.id), Tr(n));
                        Dn();
                        break;
                    case 22:
                        for (x = 0, I = pr; x < I.length; x++)
                            (D = I[x]),
                                (n = [D.time, D.event]).push(D.data.type),
                                n.push(D.data.hash),
                                n.push(D.data.x),
                                n.push(D.data.y),
                                n.push(D.data.reaction),
                                n.push(D.data.context),
                                Tr(n, !1);
                        vr();
                        break;
                    case 28:
                        (C = Tn),
                            n.push(C.visible),
                            Tr(n),
                            g(e, C.visible),
                            Rn();
                }
                return [2];
            });
        });
    }
    var hr = [],
        pr = [];
    function vr() {
        pr = [];
    }
    function gr(t, e, n, r, a, i, o) {
        void 0 === i && (i = 1),
            void 0 === o && (o = 0),
            hr.push({
                time: t,
                event: 22,
                data: { type: e, hash: n, x: r, y: a, reaction: i, context: o },
            }),
            p(e, r, a);
    }
    var mr,
        br,
        yr,
        wr,
        kr,
        Er,
        Sr = 0,
        Mr = 0,
        Or = null,
        Nr = 0;
    function _r() {
        (wr = !0),
            (Sr = 0),
            (Mr = 0),
            (Nr = 0),
            (mr = []),
            (br = []),
            (yr = {}),
            (kr = null);
    }
    function Tr(t, e) {
        if ((void 0 === e && (e = !0), wr)) {
            var n = u(),
                r = t.length > 1 ? t[1] : null,
                a = JSON.stringify(t);
            switch (r) {
                case 5:
                    Sr += a.length;
                case 37:
                case 6:
                    (Mr += a.length), mr.push(a);
                    break;
                default:
                    br.push(a);
            }
            M(25);
            var o = (function () {
                var t = !1 === i.lean && Sr > 0 ? 100 : fa.sequence * i.delay;
                return "string" == typeof i.upload
                    ? Math.max(Math.min(t, 3e4), 100)
                    : i.delay;
            })();
            n - Nr > 2 * o && (T(Or), (Or = null)),
                e &&
                    null === Or &&
                    (25 !== r && C(), (Or = _(Ir, o)), (Nr = n), Ar(Mr));
        }
    }
    function xr() {
        T(Or),
            Ir(!0),
            (Sr = 0),
            (Mr = 0),
            (Nr = 0),
            (mr = []),
            (br = []),
            (yr = {}),
            (kr = null),
            (wr = !1);
    }
    function Ir(t) {
        return (
            void 0 === t && (t = !1),
            J(this, void 0, void 0, function () {
                var e, n, r, a, o, u, s, l;
                return Z(this, function (c) {
                    switch (c.label) {
                        case 0:
                            return (
                                (Or = null),
                                (e =
                                    !1 === i.lean &&
                                    Mr > 0 &&
                                    (Mr < 1048576 || fa.sequence > 0)) &&
                                    N(1, 1),
                                Ye(),
                                (function () {
                                    var t = [];
                                    pr = [];
                                    for (
                                        var e = fa.start + fa.duration,
                                            n = Math.max(e - 2e3, 0),
                                            r = 0,
                                            a = hr;
                                        r < a.length;
                                        r++
                                    ) {
                                        var i = a[r];
                                        i.time >= n &&
                                            (i.time <= e && pr.push(i),
                                            t.push(i));
                                    }
                                    (hr = t), fr(22);
                                })(),
                                rt(),
                                (n = !0 === t),
                                (r = JSON.stringify(va(n))),
                                (a = "[" + br.join() + "]"),
                                (o = e ? "[" + mr.join() + "]" : ""),
                                (u = (function (t) {
                                    return t.p.length > 0
                                        ? '{"e":' +
                                              t.e +
                                              ',"a":' +
                                              t.a +
                                              ',"p":' +
                                              t.p +
                                              "}"
                                        : '{"e":' + t.e + ',"a":' + t.a + "}";
                                })({ e: r, a: a, p: o })),
                                n ? ((l = null), [3, 3]) : [3, 1]
                            );
                        case 1:
                            return [4, Q(u)];
                        case 2:
                            (l = c.sent()), (c.label = 3);
                        case 3:
                            return (
                                O(2, (s = l) ? s.length : u.length),
                                Dr(u, s, fa.sequence, n),
                                (br = []),
                                e && ((mr = []), (Mr = 0), (Sr = 0)),
                                [2]
                            );
                    }
                });
            })
        );
    }
    function Dr(t, e, n, r) {
        if ((void 0 === r && (r = !1), "string" == typeof i.upload)) {
            var a = i.upload,
                o = !1;
            if (
                (r &&
                    "sendBeacon" in navigator &&
                    (o = navigator.sendBeacon(a, t)) &&
                    jr(n),
                !1 === o)
            ) {
                n in yr ? yr[n].attempts++ : (yr[n] = { data: t, attempts: 1 });
                var u = new XMLHttpRequest();
                u.open("POST", a),
                    null !== n &&
                        (u.onreadystatechange = function () {
                            ba(Cr)(u, n);
                        }),
                    (u.withCredentials = !0),
                    e
                        ? (u.setRequestHeader(
                              "Accept",
                              "application/x-clarity-gzip"
                          ),
                          u.send(e))
                        : u.send(t);
            }
        } else if (i.upload) {
            (0, i.upload)(t), jr(n);
        }
    }
    function Cr(t, e) {
        var n = yr[e];
        t &&
            4 === t.readyState &&
            n &&
            ((t.status < 200 || t.status > 208) && n.attempts <= 1
                ? t.status >= 400 && t.status < 500
                    ? Lr(6)
                    : (0 === t.status &&
                          (i.upload = i.fallback ? i.fallback : i.upload),
                      Dr(n.data, null, e))
                : ((kr = {
                      sequence: e,
                      attempts: n.attempts,
                      status: t.status,
                  }),
                  n.attempts > 1 && zr(2),
                  200 === t.status &&
                      t.responseText &&
                      (function (t) {
                          switch (t && t.length > 0 ? t.split(" ")[0] : "") {
                              case "END":
                                  Lr(6);
                                  break;
                              case "UPGRADE":
                                  X("Auto");
                          }
                      })(t.responseText),
                  0 === t.status && (Dr(n.data, null, e, !0), Lr(3)),
                  t.status >= 200 && t.status <= 208 && jr(e),
                  delete yr[e]));
    }
    function jr(t) {
        1 === t && ra();
    }
    function zr(t) {
        var e = [u(), t];
        switch (t) {
            case 4:
                var n = c;
                n &&
                    ((e = [n.time, n.event]).push(n.data.visible),
                    e.push(n.data.docWidth),
                    e.push(n.data.docHeight),
                    e.push(n.data.screenWidth),
                    e.push(n.data.screenHeight),
                    e.push(n.data.scrollX),
                    e.push(n.data.scrollY),
                    e.push(n.data.pointerX),
                    e.push(n.data.pointerY),
                    e.push(n.data.activityTime),
                    Tr(e, !1)),
                    h();
                break;
            case 25:
                e.push(k.gap), Tr(e);
                break;
            case 35:
                e.push(Er.check), Tr(e, !1);
                break;
            case 3:
                e.push(q.key), Tr(e);
                break;
            case 2:
                e.push(kr.sequence),
                    e.push(kr.attempts),
                    e.push(kr.status),
                    Tr(e, !1);
                break;
            case 24:
                e.push(y.key), e.push(y.value), Tr(e);
                break;
            case 34:
                var r = Object.keys(U);
                if (r.length > 0) {
                    for (var a = 0, i = r; a < i.length; a++) {
                        var o = i[a];
                        e.push(o), e.push(U[o]);
                    }
                    G(), Tr(e, !1);
                }
                break;
            case 0:
                var s = Object.keys(S);
                if (s.length > 0) {
                    for (var l = 0, d = s; l < d.length; l++) {
                        var f = d[l],
                            p = parseInt(f, 10);
                        e.push(p), e.push(Math.round(S[f]));
                    }
                    (S = {}), Tr(e, !1);
                }
                break;
            case 1:
                var v = Object.keys(Xr);
                if (v.length > 0) {
                    for (var g = 0, m = v; g < m.length; g++) {
                        var b = m[g];
                        p = parseInt(b, 10);
                        e.push(p), e.push(Xr[b]);
                    }
                    Fr(), Tr(e, !1);
                }
                break;
            case 36:
                var w = Object.keys(R);
                if (w.length > 0) {
                    for (var E = 0, M = w; E < M.length; E++) {
                        var O = M[E];
                        p = parseInt(O, 10);
                        e.push(p), e.push([].concat.apply([], R[O]));
                    }
                    Y(), Tr(e, !1);
                }
        }
    }
    function Rr() {
        Er = { check: 0 };
    }
    function Ar(t) {
        if (0 === Er.check) {
            var e = Er.check;
            (e = fa.sequence >= 128 ? 1 : e),
                (e = u() > 72e5 ? 2 : e),
                (e = t > 10485760 ? 2 : e) !== Er.check && Lr(e);
        }
    }
    function Lr(t) {
        (Er.check = t), na(), Fa();
    }
    function Yr() {
        0 !== Er.check && zr(35);
    }
    function Hr() {
        Er = null;
    }
    var qr = null,
        Xr = null;
    function Wr() {
        (qr = {}), (Xr = {});
    }
    function Ur() {
        (qr = {}), (Xr = {});
    }
    function Pr(t, e) {
        e &&
            ((e = "" + e),
            t in qr || (qr[t] = []),
            qr[t].indexOf(e) < 0 &&
                (qr[t].push(e),
                t in Xr || (Xr[t] = []),
                Xr[t].push(e),
                qr[t].length > 128 && Lr(5)));
    }
    function Br() {
        zr(1);
    }
    function Fr() {
        Xr = {};
    }
    var Vr = null,
        Gr = null,
        Jr = null;
    function Zr() {
        (Gr = null), (Jr = null);
        var t =
                navigator && "userAgent" in navigator
                    ? navigator.userAgent
                    : "",
            e = document && document.title ? document.title : "",
            n = (function () {
                var t = {
                        session: oa(),
                        ts: Math.round(Date.now()),
                        count: 1,
                        upgrade: null,
                        upload: "",
                    },
                    e = la("_clsk");
                if (e) {
                    var n = e.split("|");
                    n.length >= 5 &&
                        t.ts - ua(n[1]) < 18e5 &&
                        ((t.session = n[0]),
                        (t.count = ua(n[2]) + 1),
                        (t.upgrade = ua(n[3])),
                        (t.upload =
                            n.length >= 6
                                ? "https://" + n[5] + "/" + n[4]
                                : "https://" + n[4]));
                }
                return t;
            })(),
            r = sa();
        (Vr = {
            projectId: i.projectId || l(location.host),
            userId: r.id,
            sessionId: n.session,
            pageNum: n.count,
        }),
            (i.lean = i.track && null !== n.upgrade ? 0 === n.upgrade : i.lean),
            (i.upload =
                i.track &&
                "string" == typeof i.upload &&
                n.upload &&
                n.upload.length > "https://".length
                    ? n.upload
                    : i.upload),
            Pr(0, t),
            Pr(3, e),
            Pr(1, location.href),
            Pr(2, document.referrer),
            Pr(
                15,
                (function () {
                    var t = oa();
                    if (i.track && aa(window, "sessionStorage")) {
                        var e = sessionStorage.getItem("_cltk");
                        (t = e || t), sessionStorage.setItem("_cltk", t);
                    }
                    return t;
                })()
            ),
            Pr(16, document.documentElement.lang),
            Pr(17, document.dir),
            navigator &&
                (Pr(9, navigator.userLanguage || navigator.language),
                N(26, navigator.webdriver ? 1 : 0),
                Kr()),
            N(0, n.ts),
            N(1, 0),
            screen &&
                (N(14, Math.round(screen.width)),
                N(15, Math.round(screen.height)),
                N(16, Math.round(screen.colorDepth)));
        for (var a = 0, o = i.cookies; a < o.length; a++) {
            var u = o[a],
                s = la(u);
            s && P(u, s);
        }
        ia(r);
    }
    function Kr() {
        navigator.userAgentData &&
            navigator.userAgentData.getHighEntropyValues &&
            navigator.userAgentData
                .getHighEntropyValues([
                    "model",
                    "platform",
                    "platformVersion",
                    "uaFullVersion",
                ])
                .then(function (t) {
                    var e;
                    Pr(22, t.platform),
                        Pr(23, t.platformVersion),
                        null === (e = t.brands) ||
                            void 0 === e ||
                            e.forEach(function (t) {
                                Pr(24, t.name + "~" + t.version);
                            }),
                        Pr(25, t.model),
                        N(27, t.mobile ? 1 : 0);
                });
    }
    function Qr() {
        (Gr = null), (Jr = null), (Vr = null);
    }
    function $r(t, e) {
        void 0 === e && (e = !0), Vr && !1 === e ? t(Vr, !i.lean) : (Gr = t);
    }
    function ta() {
        return Vr ? [Vr.userId, Vr.sessionId, Vr.pageNum].join(".") : "";
    }
    function ea() {
        Ca() && ((i.track = !0), ia(sa(), 1));
    }
    function na() {
        ca("_clsk", "", 0);
    }
    function ra() {
        var t = Math.round(Date.now()),
            e = i.lean ? 0 : 1,
            n =
                i.upload && "string" == typeof i.upload
                    ? i.upload.replace("https://", "")
                    : "";
        e && Gr && Gr(Vr, !i.lean),
            ca("_clsk", [Vr.sessionId, t, Vr.pageNum, e, n].join("|"), 1);
    }
    function aa(t, e) {
        try {
            return !!t[e];
        } catch (t) {
            return !1;
        }
    }
    function ia(t, e) {
        void 0 === e && (e = null), (e = null === e ? t.consent : e);
        var n = Math.ceil((Date.now() + 31536e6) / 864e5);
        (null === t.expiry || Math.abs(n - t.expiry) >= 1 || t.consent !== e) &&
            ca("_clck", [Vr.userId, 1, n.toString(36), e].join("|"), 365);
    }
    function oa() {
        var t = Math.floor(Math.random() * Math.pow(2, 32));
        return (
            window &&
                window.crypto &&
                window.crypto.getRandomValues &&
                Uint32Array &&
                (t = window.crypto.getRandomValues(new Uint32Array(1))[0]),
            t.toString(36)
        );
    }
    function ua(t, e) {
        return void 0 === e && (e = 10), parseInt(t, e);
    }
    function sa() {
        var t = { id: oa(), expiry: null, consent: 0 },
            e = la("_clck");
        if (e && e.length > 0) {
            for (
                var n = e.split("|"),
                    r = 0,
                    a = 0,
                    o = document.cookie.split(";");
                a < o.length;
                a++
            ) {
                r += "_clck" === o[a].split("=")[0].trim() ? 1 : 0;
            }
            if (1 === n.length || r > 1) {
                var u = ";expires=" + new Date(0).toUTCString() + ";path=/";
                (document.cookie = "_clck=" + u),
                    (document.cookie = "_clsk=" + u);
            }
            n.length > 2 && (t.expiry = ua(n[2], 36)),
                n.length > 3 && 1 === ua(n[3]) && (t.consent = 1),
                (i.track = i.track || 1 === t.consent),
                (t.id = i.track ? n[0] : t.id);
        }
        return t;
    }
    function la(t) {
        if (aa(document, "cookie")) {
            var e = document.cookie.split(";");
            if (e)
                for (var n = 0; n < e.length; n++) {
                    var r = e[n].split("=");
                    if (r.length > 1 && r[0] && r[0].trim() === t) return r[1];
                }
        }
        return null;
    }
    function ca(t, e, n) {
        if (
            i.track &&
            ((navigator && navigator.cookieEnabled) || aa(document, "cookie"))
        ) {
            var r = new Date();
            r.setDate(r.getDate() + n);
            var a =
                t +
                "=" +
                e +
                ";" +
                (r ? "expires=" + r.toUTCString() : "") +
                ";path=/";
            try {
                if (null === Jr) {
                    for (
                        var o = location.hostname
                                ? location.hostname.split(".")
                                : [],
                            u = o.length - 1;
                        u >= 0;
                        u--
                    )
                        if (
                            ((Jr = "." + o[u] + (Jr || "")),
                            u < o.length - 1 &&
                                ((document.cookie = a + ";domain=" + Jr),
                                la(t) === e))
                        )
                            return;
                    Jr = "";
                }
            } catch (t) {
                Jr = "";
            }
            document.cookie = Jr ? a + ";domain=" + Jr : a;
        }
    }
    var da,
        fa = null;
    function ha() {
        var t = Vr;
        fa = {
            version: s,
            sequence: 0,
            start: 0,
            duration: 0,
            projectId: t.projectId,
            userId: t.userId,
            sessionId: t.sessionId,
            pageNum: t.pageNum,
            upload: 0,
            end: 0,
        };
    }
    function pa() {
        fa = null;
    }
    function va(t) {
        return (
            (fa.start = fa.start + fa.duration),
            (fa.duration = u() - fa.start),
            fa.sequence++,
            (fa.upload = t && "sendBeacon" in navigator ? 1 : 0),
            (fa.end = t ? 1 : 0),
            [
                fa.version,
                fa.sequence,
                fa.start,
                fa.duration,
                fa.projectId,
                fa.userId,
                fa.sessionId,
                fa.pageNum,
                fa.upload,
                fa.end,
            ]
        );
    }
    function ga() {
        da = [];
    }
    function ma(t) {
        if (da && -1 === da.indexOf(t.message)) {
            var e = i.report;
            if (e && e.length > 0) {
                var n = {
                    v: fa.version,
                    p: fa.projectId,
                    u: fa.userId,
                    s: fa.sessionId,
                    n: fa.pageNum,
                };
                t.message && (n.m = t.message), t.stack && (n.e = t.stack);
                var r = new XMLHttpRequest();
                r.open("POST", e),
                    r.send(JSON.stringify(n)),
                    da.push(t.message);
            }
        }
        return t;
    }
    function ba(t) {
        return function () {
            var e = performance.now();
            try {
                t.apply(this, arguments);
            } catch (t) {
                throw ma(t);
            }
            var n = performance.now() - e;
            O(4, n), n > 30 && (M(7), N(6, n));
        };
    }
    var ya = [];
    function wa(t, e, n, r) {
        void 0 === r && (r = !1), (n = ba(n));
        try {
            t.addEventListener(e, n, r),
                ya.push({ event: e, target: t, listener: n, capture: r });
        } catch (t) {}
    }
    function ka() {
        for (var t = 0, e = ya; t < e.length; t++) {
            var n = e[t];
            try {
                n.target.removeEventListener(n.event, n.listener, n.capture);
            } catch (t) {}
        }
        ya = [];
    }
    var Ea = null,
        Sa = null,
        Ma = null,
        Oa = 0;
    function Na() {
        return !(Oa++ > 20) || (Xt(4, 0), !1);
    }
    function _a() {
        (Oa = 0), Ma !== Ta() && (Fa(), window.setTimeout(Ba, 250));
    }
    function Ta() {
        return location.href
            ? location.href.replace(location.hash, "")
            : location.href;
    }
    var xa = !1;
    function Ia() {
        (xa = !0),
            (o = performance.now()),
            ht(),
            ka(),
            ga(),
            (Ma = Ta()),
            (Oa = 0),
            wa(window, "popstate", _a),
            null === Ea && (Ea = history.pushState),
            (history.pushState = function () {
                Na() && (Ea.apply(this, arguments), _a());
            }),
            null === Sa && (Sa = history.replaceState),
            (history.replaceState = function () {
                Na() && (Sa.apply(this, arguments), _a());
            });
    }
    function Da() {
        null !== Ea && ((history.pushState = Ea), (Ea = null)),
            null !== Sa && ((history.replaceState = Sa), (Sa = null)),
            (Ma = null),
            (Oa = 0),
            ga(),
            ka(),
            ht(),
            (o = 0),
            (xa = !1);
    }
    function Ca() {
        return xa;
    }
    function ja(t) {
        if (null === t || xa) return !1;
        for (var e in t) e in i && (i[e] = t[e]);
        return !0;
    }
    function za() {
        Ba(), w("clarity", "restart");
    }
    function Ra() {
        return J(this, void 0, void 0, function () {
            var t, e;
            return Z(this, function (n) {
                switch (n.label) {
                    case 0:
                        return (
                            (t = u()),
                            mt((e = { id: ta(), cost: 3 })),
                            [4, Vn(document, e, 0)]
                        );
                    case 1:
                        return n.sent(), [4, Nt(5, e, t)];
                    case 2:
                        return n.sent(), bt(e), [2];
                }
            });
        });
    }
    var Aa,
        La = null;
    function Ya() {
        La = null;
    }
    function Ha(t) {
        (La = {
            fetchStart: Math.round(t.fetchStart),
            connectStart: Math.round(t.connectStart),
            connectEnd: Math.round(t.connectEnd),
            requestStart: Math.round(t.requestStart),
            responseStart: Math.round(t.responseStart),
            responseEnd: Math.round(t.responseEnd),
            domInteractive: Math.round(t.domInteractive),
            domComplete: Math.round(t.domComplete),
            loadEventStart: Math.round(t.loadEventStart),
            loadEventEnd: Math.round(t.loadEventEnd),
            redirectCount: Math.round(t.redirectCount),
            size: t.transferSize ? t.transferSize : 0,
            type: t.type,
            protocol: t.nextHopProtocol,
            encodedSize: t.encodedBodySize ? t.encodedBodySize : 0,
            decodedSize: t.decodedBodySize ? t.decodedBodySize : 0,
        }),
            (function (t) {
                J(this, void 0, void 0, function () {
                    var e, n;
                    return Z(this, function (r) {
                        switch (((e = u()), (n = [e, t]), t)) {
                            case 29:
                                n.push(La.fetchStart),
                                    n.push(La.connectStart),
                                    n.push(La.connectEnd),
                                    n.push(La.requestStart),
                                    n.push(La.responseStart),
                                    n.push(La.responseEnd),
                                    n.push(La.domInteractive),
                                    n.push(La.domComplete),
                                    n.push(La.loadEventStart),
                                    n.push(La.loadEventEnd),
                                    n.push(La.redirectCount),
                                    n.push(La.size),
                                    n.push(La.type),
                                    n.push(La.protocol),
                                    n.push(La.encodedSize),
                                    n.push(La.decodedSize),
                                    Ya(),
                                    Tr(n, !1);
                        }
                        return [2];
                    });
                });
            })(29);
    }
    var qa = [
        "navigation",
        "resource",
        "longtask",
        "first-input",
        "layout-shift",
        "largest-contentful-paint",
    ];
    function Xa() {
        try {
            Aa && Aa.disconnect(), (Aa = new PerformanceObserver(ba(Wa)));
            for (var t = 0, e = qa; t < e.length; t++) {
                var n = e[t];
                PerformanceObserver.supportedEntryTypes.indexOf(n) >= 0 &&
                    ("layout-shift" === n && O(9, 0),
                    Aa.observe({ type: n, buffered: !0 }));
            }
        } catch (t) {
            Xt(3, 1);
        }
    }
    function Wa(t) {
        !(function (t) {
            for (
                var e =
                        !("visibilityState" in document) ||
                        "visible" === document.visibilityState,
                    n = 0;
                n < t.length;
                n++
            ) {
                var r = t[n];
                switch (r.entryType) {
                    case "navigation":
                        Ha(r);
                        break;
                    case "resource":
                        Pr(4, Ua(r.name));
                        break;
                    case "longtask":
                        M(7);
                        break;
                    case "first-input":
                        e && N(10, r.processingStart - r.startTime);
                        break;
                    case "layout-shift":
                        e && !r.hadRecentInput && O(9, 1e3 * r.value);
                        break;
                    case "largest-contentful-paint":
                        e && N(8, r.startTime);
                }
            }
        })(t.getEntries());
    }
    function Ua(t) {
        var e = document.createElement("a");
        return (e.href = t), e.hostname;
    }
    var Pa = [
        Object.freeze({
            __proto__: null,
            start: function () {
                wa(window, "error", Lt),
                    (At = {}),
                    (qt = {}),
                    wa(document, "securitypolicyviolation", Wt);
            },
            stop: function () {
                qt = {};
            },
        }),
        Object.freeze({
            __proto__: null,
            start: function () {
                Mt(),
                    Ot(),
                    We(),
                    (Re = null),
                    (De = new WeakMap()),
                    (Ce = {}),
                    (je = []),
                    (ze = !!window.IntersectionObserver),
                    he(),
                    (function () {
                        (Gn = []),
                            ($n = []),
                            (tr = null),
                            (er = 0),
                            (nr = {}),
                            null === Zn &&
                                (Zn = CSSStyleSheet.prototype.insertRule),
                            null === Kn &&
                                (Kn = CSSStyleSheet.prototype.deleteRule),
                            null === Qn &&
                                (Qn = Element.prototype.attachShadow),
                            (CSSStyleSheet.prototype.insertRule = function () {
                                return (
                                    ur(this.ownerNode),
                                    Zn.apply(this, arguments)
                                );
                            }),
                            (CSSStyleSheet.prototype.deleteRule = function () {
                                return (
                                    ur(this.ownerNode),
                                    Kn.apply(this, arguments)
                                );
                            });
                        try {
                            Element.prototype.attachShadow = function () {
                                return ur(Qn.apply(this, arguments));
                            };
                        } catch (t) {
                            Qn = null;
                        }
                    })(),
                    pt(Ra, 1).then(function () {
                        ba(Ot)(), ba(Ye)();
                    }),
                    jt(),
                    (Dt = null),
                    (It = !!window.ResizeObserver);
            },
            stop: function () {
                We(),
                    (De = null),
                    (Ce = {}),
                    (je = []),
                    Re && (Re.disconnect(), (Re = null)),
                    (ze = !1),
                    pe(),
                    (function () {
                        for (var t = 0, e = Gn; t < e.length; t++) {
                            var n = e[t];
                            n && n.disconnect();
                        }
                        (Gn = []),
                            null !== Zn &&
                                ((CSSStyleSheet.prototype.insertRule = Zn),
                                (Zn = null)),
                            null !== Kn &&
                                ((CSSStyleSheet.prototype.deleteRule = Kn),
                                (Kn = null)),
                            null != Qn &&
                                ((Element.prototype.attachShadow = Qn),
                                (Qn = null)),
                            (nr = {}),
                            (Jn = []),
                            ($n = []),
                            (er = 0),
                            (tr = null);
                    })(),
                    zt(),
                    Mt();
            },
        }),
        Ln,
        Object.freeze({
            __proto__: null,
            start: function () {
                Ya(),
                    (function () {
                        window.PerformanceObserver &&
                        PerformanceObserver.supportedEntryTypes
                            ? "complete" !== document.readyState
                                ? wa(window, "load", _.bind(this, Xa, 0))
                                : Xa()
                            : Xt(3, 0);
                    })();
            },
            stop: function () {
                Aa && Aa.disconnect(), (Aa = null), Ya();
            },
        }),
    ];
    function Ba(t) {
        void 0 === t && (t = null),
            (function () {
                try {
                    return (
                        !1 === xa &&
                        "undefined" != typeof Promise &&
                        window.MutationObserver &&
                        document.createTreeWalker &&
                        "now" in Date &&
                        "now" in performance &&
                        "undefined" != typeof WeakMap
                    );
                } catch (t) {
                    return !1;
                }
            })() &&
                (ja(t),
                Ia(),
                et(),
                Pa.forEach(function (t) {
                    return ba(t.start)();
                }));
    }
    function Fa() {
        Ca() &&
            (Pa.slice()
                .reverse()
                .forEach(function (t) {
                    return ba(t.stop)();
                }),
            nt(),
            Da());
    }
    var Va = Object.freeze({
        __proto__: null,
        version: s,
        start: Ba,
        pause: function () {
            Ca() &&
                (w("clarity", "pause"),
                null === dt &&
                    (dt = new Promise(function (t) {
                        ft = t;
                    })));
        },
        resume: function () {
            Ca() &&
                (dt && (ft(), (dt = null), null === ct && vt()),
                w("clarity", "resume"));
        },
        stop: Fa,
        consent: ea,
        event: w,
        identify: B,
        set: P,
        upgrade: X,
        metadata: $r,
    });
    !(function () {
        if ("undefined" != typeof window) {
            var t = window,
                e = "clarity";
            if (t[e] && t[e].v)
                return console.warn(
                    "Error CL001: Multiple Clarity tags detected."
                );
            var n = (t[e] && t[e].q) || [];
            for (
                t[e] = function (t) {
                    for (var e = [], n = 1; n < arguments.length; n++)
                        e[n - 1] = arguments[n];
                    return Va[t].apply(Va, e);
                },
                    t[e].v = s;
                n.length > 0;

            )
                t[e].apply(t, n.shift());
        }
    })();
})();
