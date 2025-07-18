/*!
 * vue-carousel v0.7.1
 * (c) 2018 todd.beauchamp@ssense.com
 * https://github.com/ssense/vue-carousel#readme
 */
! function(t, e) {
    "object" == typeof exports && "object" == typeof module ? module.exports = e() : "function" == typeof define && define.amd ? define([], e) : "object" == typeof exports ? exports.VueCarousel = e() : t.VueCarousel = e()
}(this, function() {
    return function(t) {
        function e(i) {
            if (n[i]) return n[i].exports;
            var r = n[i] = {
                exports: {},
                id: i,
                loaded: !1
            };
            return t[i].call(r.exports, r, r.exports, e), r.loaded = !0, r.exports
        }
        var n = {};
        return e.m = t, e.c = n, e.p = "", e(0)
    }([function(t, e, n) {
        "use strict";

        function i(t) {
            return t && t.__esModule ? t : {
                    default: t
                }
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.Slide = e.Carousel = void 0;
        var r = n(1),
            a = i(r),
            o = n(41),
            s = i(o),
            u = function(t) {
                t.component("carousel", a.default), t.component("slide", s.default)
            };
        e.default = {
            install: u
        }, e.Carousel = a.default, e.Slide = s.default
    }, function(t, e, n) {
        function i(t) {
            n(2)
        }
        var r = n(7)(n(8), n(46), i, null, null);
        t.exports = r.exports
    }, function(t, e, n) {
        var i = n(3);
        "string" == typeof i && (i = [
            [t.id, i, ""]
        ]), i.locals && (t.exports = i.locals);
        n(5)("80564c20", i, !0, {})
    }, function(t, e, n) {
        e = t.exports = n(4)(), e.push([t.id, ".VueCarousel{position:relative}.VueCarousel-wrapper{width:100%;position:relative;overflow:hidden}.VueCarousel-inner{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;-webkit-backface-visibility:hidden;backface-visibility:hidden}", ""])
    }, function(t, e) {
        t.exports = function() {
            var t = [];
            return t.toString = function() {
                for (var t = [], e = 0; e < this.length; e++) {
                    var n = this[e];
                    n[2] ? t.push("@media " + n[2] + "{" + n[1] + "}") : t.push(n[1])
                }
                return t.join("")
            }, t.i = function(e, n) {
                "string" == typeof e && (e = [
                    [null, e, ""]
                ]);
                for (var i = {}, r = 0; r < this.length; r++) {
                    var a = this[r][0];
                    "number" == typeof a && (i[a] = !0)
                }
                for (r = 0; r < e.length; r++) {
                    var o = e[r];
                    "number" == typeof o[0] && i[o[0]] || (n && !o[2] ? o[2] = n : n && (o[2] = "(" + o[2] + ") and (" + n + ")"), t.push(o))
                }
            }, t
        }
    }, function(t, e, n) {
        function i(t) {
            for (var e = 0; e < t.length; e++) {
                var n = t[e],
                    i = l[n.id];
                if (i) {
                    i.refs++;
                    for (var r = 0; r < i.parts.length; r++) i.parts[r](n.parts[r]);
                    for (; r < n.parts.length; r++) i.parts.push(a(n.parts[r]));
                    i.parts.length > n.parts.length && (i.parts.length = n.parts.length)
                } else {
                    for (var o = [], r = 0; r < n.parts.length; r++) o.push(a(n.parts[r]));
                    l[n.id] = {
                        id: n.id,
                        refs: 1,
                        parts: o
                    }
                }
            }
        }

        function r() {
            var t = document.createElement("style");
            return t.type = "text/css", d.appendChild(t), t
        }

        function a(t) {
            var e, n, i = document.querySelector("style[" + m + '~="' + t.id + '"]');
            if (i) {
                if (p) return g;
                i.parentNode.removeChild(i)
            }
            if (b) {
                var a = h++;
                i = f || (f = r()), e = o.bind(null, i, a, !1), n = o.bind(null, i, a, !0)
            } else i = r(), e = s.bind(null, i), n = function() {
                i.parentNode.removeChild(i)
            };
            return e(t),
                function(i) {
                    if (i) {
                        if (i.css === t.css && i.media === t.media && i.sourceMap === t.sourceMap) return;
                        e(t = i)
                    } else n()
                }
        }

        function o(t, e, n, i) {
            var r = n ? "" : i.css;
            if (t.styleSheet) t.styleSheet.cssText = y(e, r);
            else {
                var a = document.createTextNode(r),
                    o = t.childNodes;
                o[e] && t.removeChild(o[e]), o.length ? t.insertBefore(a, o[e]) : t.appendChild(a)
            }
        }

        function s(t, e) {
            var n = e.css,
                i = e.media,
                r = e.sourceMap;
            if (i && t.setAttribute("media", i), v.ssrId && t.setAttribute(m, e.id), r && (n += "\n/*# sourceURL=" + r.sources[0] + " */", n += "\n/*# sourceMappingURL=data:application/json;base64," + btoa(unescape(encodeURIComponent(JSON.stringify(r)))) + " */"), t.styleSheet) t.styleSheet.cssText = n;
            else {
                for (; t.firstChild;) t.removeChild(t.firstChild);
                t.appendChild(document.createTextNode(n))
            }
        }
        var u = "undefined" != typeof document,
            c = n(6),
            l = {},
            d = u && (document.head || document.getElementsByTagName("head")[0]),
            f = null,
            h = 0,
            p = !1,
            g = function() {},
            v = null,
            m = "data-vue-ssr-id",
            b = "undefined" != typeof navigator && /msie [6-9]\b/.test(navigator.userAgent.toLowerCase());
        t.exports = function(t, e, n, r) {
            p = n, v = r || {};
            var a = c(t, e);
            return i(a),
                function(e) {
                    for (var n = [], r = 0; r < a.length; r++) {
                        var o = a[r],
                            s = l[o.id];
                        s.refs--, n.push(s)
                    }
                    e ? (a = c(t, e), i(a)) : a = [];
                    for (var r = 0; r < n.length; r++) {
                        var s = n[r];
                        if (0 === s.refs) {
                            for (var u = 0; u < s.parts.length; u++) s.parts[u]();
                            delete l[s.id]
                        }
                    }
                }
        };
        var y = function() {
            var t = [];
            return function(e, n) {
                return t[e] = n, t.filter(Boolean).join("\n")
            }
        }()
    }, function(t, e) {
        t.exports = function(t, e) {
            for (var n = [], i = {}, r = 0; r < e.length; r++) {
                var a = e[r],
                    o = a[0],
                    s = a[1],
                    u = a[2],
                    c = a[3],
                    l = {
                        id: t + ":" + r,
                        css: s,
                        media: u,
                        sourceMap: c
                    };
                i[o] ? i[o].parts.push(l) : n.push(i[o] = {
                        id: o,
                        parts: [l]
                    })
            }
            return n
        }
    }, function(t, e) {
        t.exports = function(t, e, n, i, r) {
            var a, o = t = t || {},
                s = typeof t.default;
            "object" !== s && "function" !== s || (a = t, o = t.default);
            var u = "function" == typeof o ? o.options : o;
            e && (u.render = e.render, u.staticRenderFns = e.staticRenderFns), i && (u._scopeId = i);
            var c;
            if (r ? (c = function(t) {
                        t = t || this.$vnode && this.$vnode.ssrContext || this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext, t || "undefined" == typeof __VUE_SSR_CONTEXT__ || (t = __VUE_SSR_CONTEXT__), n && n.call(this, t), t && t._registeredComponents && t._registeredComponents.add(r)
                    }, u._ssrRegister = c) : n && (c = n), c) {
                var l = u.functional,
                    d = l ? u.render : u.beforeCreate;
                l ? u.render = function(t, e) {
                        return c.call(e), d(t, e)
                    } : u.beforeCreate = d ? [].concat(d, c) : [c]
            }
            return {
                esModule: a,
                exports: o,
                options: u
            }
        }
    }, function(t, e, n) {
        "use strict";

        function i(t) {
            return t && t.__esModule ? t : {
                    default: t
                }
        }
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var r = n(9),
            a = i(r),
            o = n(29),
            s = i(o),
            u = n(30),
            c = i(u),
            l = n(31),
            d = i(l),
            f = n(36),
            h = i(f),
            p = n(41),
            g = i(p),
            v = {
                onwebkittransitionend: "webkitTransitionEnd",
                onmoztransitionend: "transitionend",
                onotransitionend: "oTransitionEnd otransitionend",
                ontransitionend: "transitionend"
            },
            m = function() {
                for (var t in v)
                    if (t in window) return v[t]
            };
        e.default = {
            name: "carousel",
            beforeUpdate: function() {
                this.computeCarouselWidth()
            },
            components: {
                Navigation: d.default,
                Pagination: h.default,
                Slide: g.default
            },
            data: function() {
                return {
                    browserWidth: null,
                    carouselWidth: null,
                    currentPage: 0,
                    dragging: !1,
                    dragMomentum: 0,
                    dragOffset: 0,
                    dragStartY: 0,
                    dragStartX: 0,
                    isTouch: "undefined" != typeof window && "ontouchstart" in window,
                    offset: 0,
                    refreshRate: 16,
                    slideCount: 0,
                    transitionend: "transitionend"
                }
            },
            mixins: [s.default],
            provide: function() {
                return {
                    carousel: this
                }
            },
            props: {
                easing: {
                    type: String,
                    default: "ease"
                },
                minSwipeDistance: {
                    type: Number,
                    default: 8
                },
                navigationClickTargetSize: {
                    type: Number,
                    default: 8
                },
                mouseDrag: {
                    type: Boolean,
                    default: !0
                },
                navigationEnabled: {
                    type: Boolean,
                    default: !1
                },
                navigationNextLabel: {
                    type: String,
                    default: "Next ——"
                },
                navigationPrevLabel: {
                    type: String,
                    default: "—— Previus"
                },
                paginationActiveColor: {
                    type: String,
                    default: "#000000"
                },
                paginationColor: {
                    type: String,
                    default: "#efefef"
                },
                paginationEnabled: {
                    type: Boolean,
                    default: !0
                },
                paginationPadding: {
                    type: Number,
                    default: 10
                },
                paginationSize: {
                    type: Number,
                    default: 10
                },
                perPage: {
                    type: Number,
                    default: 2
                },
                perPageCustom: {
                    type: Array
                },
                resistanceCoef: {
                    type: Number,
                    default: 20
                },
                scrollPerPage: {
                    type: Boolean,
                    default: !0
                },
                speed: {
                    type: Number,
                    default: 500
                },
                loop: {
                    type: Boolean,
                    default: !1
                },
                navigateTo: {
                    type: Number,
                    default: 0
                },
                spacePadding: {
                    type: Number,
                    default: 0
                }
            },
            watch: {
                navigateTo: function(t) {
                    t !== this.currentPage && this.goToPage(t)
                },
                currentPage: function(t) {
                    this.$emit("pageChange", t)
                }
            },
            computed: {
                breakpointSlidesPerPage: function() {
                    if (!this.perPageCustom) return this.perPage;
                    var t = this.perPageCustom,
                        e = this.browserWidth,
                        n = t.sort(function(t, e) {
                            return t[0] > e[0] ? -1 : 1
                        }),
                        i = n.filter(function(t) {
                            return e >= t[0]
                        }),
                        r = i[0] && i[0][1];
                    return r || this.perPage
                },
                canAdvanceForward: function() {
                    return this.loop || this.offset < this.maxOffset
                },
                canAdvanceBackward: function() {
                    return this.loop || this.currentPage > 0
                },
                currentPerPage: function() {
                    return !this.perPageCustom || this.$isServer ? this.perPage : this.breakpointSlidesPerPage
                },
                currentOffset: function() {
                    return (this.offset + this.dragOffset) * -1
                },
                isHidden: function() {
                    return this.carouselWidth <= 0
                },
                maxOffset: function() {
                    return this.slideWidth * this.slideCount - this.carouselWidth + 2 * this.spacePadding
                },
                pageCount: function() {
                    return this.scrollPerPage ? Math.ceil(this.slideCount / this.currentPerPage) : this.slideCount
                },
                slideWidth: function() {
                    var t = this.carouselWidth - 2 * this.spacePadding,
                        e = Math.min(this.currentPerPage, this.slideCount);
                    return t / e
                },
                transitionStyle: function() {
                    return this.speed / 1e3 + "s " + this.easing + " transform"
                },
                padding: function t() {
                    var t = this.spacePadding;
                    return t > 0 && t
                }
            },
            methods: {
                getNextPage: function() {
                    return this.currentPage < this.pageCount - 1 ? this.currentPage + 1 : this.loop ? 0 : this.currentPage
                },
                getPreviousPage: function() {
                    return this.currentPage > 0 ? this.currentPage - 1 : this.loop ? this.pageCount - 1 : this.currentPage
                },
                advancePage: function(t) {
                    t && "backward" === t && this.canAdvanceBackward ? this.goToPage(this.getPreviousPage(), "navigation") : (!t || t && "backward" !== t) && this.canAdvanceForward && this.goToPage(this.getNextPage(), "navigation")
                },
                attachMutationObserver: function() {
                    var t = this,
                        e = window.MutationObserver || window.WebKitMutationObserver || window.MozMutationObserver;
                    if (e) {
                        var n = {
                            attributes: !0,
                            data: !0
                        };
                        this.mutationObserver = new e(function() {
                            t.$nextTick(function() {
                                t.computeCarouselWidth()
                            })
                        }), this.$parent.$el && this.mutationObserver.observe(this.$parent.$el, n)
                    }
                },
                handleNavigation: function(t) {
                    this.advancePage(t)
                },
                detachMutationObserver: function() {
                    this.mutationObserver && this.mutationObserver.disconnect()
                },
                getBrowserWidth: function() {
                    return this.browserWidth = window.innerWidth, this.browserWidth
                },
                getCarouselWidth: function() {
                    var t = this.$refs["VueCarousel-inner"];
                    return this.carouselWidth = t && t.clientWidth || 0, this.carouselWidth
                },
                getSlideCount: function() {
                    this.slideCount = this.$slots && this.$slots.default && this.$slots.default.filter(function(t) {
                            return t.tag && t.tag.indexOf("slide") > -1
                        }).length || 0
                },
                goToPage: function(t) {
                    t >= 0 && t <= this.pageCount && (this.offset = this.scrollPerPage ? Math.min(this.slideWidth * this.currentPerPage * t, this.maxOffset) : Math.min(this.slideWidth * t, this.maxOffset), this.currentPage = t)
                },
                onStart: function(t) {
                    document.addEventListener(this.isTouch ? "touchend" : "mouseup", this.onEnd, !0), document.addEventListener(this.isTouch ? "touchmove" : "mousemove", this.onDrag, !0), this.startTime = t.timeStamp, this.dragging = !0, this.dragStartX = this.isTouch ? t.touches[0].clientX : t.clientX, this.dragStartY = this.isTouch ? t.touches[0].clientY : t.clientY
                },
                onEnd: function(t) {
                    var e = this.isTouch ? t.changedTouches[0].clientX : t.clientX,
                        n = this.dragStartX - e;
                    if (this.dragMomentum = n / (t.timeStamp - this.startTime), 0 !== this.minSwipeDistance && Math.abs(n) >= this.minSwipeDistance) {
                        var i = this.scrollPerPage ? this.slideWidth * this.currentPerPage : this.slideWidth;
                        this.dragOffset = this.dragOffset + (0, a.default)(n) * (i / 2)
                    }
                    this.offset += this.dragOffset, this.dragOffset = 0, this.dragging = !1, this.render(), document.removeEventListener(this.isTouch ? "touchend" : "mouseup", this.onEnd, !0), document.removeEventListener(this.isTouch ? "touchmove" : "mousemove", this.onDrag, !0)
                },
                onDrag: function(t) {
                    var e = this.isTouch ? t.touches[0].clientX : t.clientX,
                        n = this.isTouch ? t.touches[0].clientY : t.clientY,
                        i = this.dragStartX - e,
                        r = this.dragStartY - n;
                    if (!(this.isTouch && Math.abs(i) < Math.abs(r))) {
                        t.stopImmediatePropagation(), this.dragOffset = i;
                        var a = this.offset + this.dragOffset;
                        a < 0 ? this.dragOffset = -Math.sqrt(-this.resistanceCoef * this.dragOffset) : a > this.maxOffset && (this.dragOffset = Math.sqrt(this.resistanceCoef * this.dragOffset))
                    }
                },
                onResize: function() {
                    var t = this;
                    this.computeCarouselWidth(), this.dragging = !0, this.render(), setTimeout(function() {
                        t.dragging = !1
                    }, this.refreshRate)
                },
                render: function() {
                    this.offset += Math.max(-this.currentPerPage + 1, Math.min(Math.round(this.dragMomentum), this.currentPerPage - 1)) * this.slideWidth;
                    var t = this.scrollPerPage ? this.slideWidth * this.currentPerPage : this.slideWidth;
                    this.offset = t * Math.round(this.offset / t), this.offset = Math.max(0, Math.min(this.offset, this.maxOffset)), this.currentPage = this.scrollPerPage ? Math.round(this.offset / this.slideWidth / this.currentPerPage) : Math.round(this.offset / this.slideWidth)
                },
                computeCarouselWidth: function() {
                    this.getSlideCount(), this.getBrowserWidth(), this.getCarouselWidth(), this.setCurrentPageInBounds()
                },
                setCurrentPageInBounds: function() {
                    if (!this.canAdvanceForward && this.scrollPerPage) {
                        var t = this.pageCount - 1;
                        this.currentPage = t >= 0 ? t : 0, this.offset = Math.max(0, Math.min(this.offset, this.maxOffset))
                    }
                },
                handleTransitionEnd: function() {
                    this.$emit("transitionEnd")
                }
            },
            mounted: function() {
                window.addEventListener("resize", (0, c.default)(this.onResize, this.refreshRate)), (this.isTouch || this.mouseDrag) && this.$refs["VueCarousel-wrapper"].addEventListener(this.isTouch ? "touchstart" : "mousedown", this.onStart), this.attachMutationObserver(), this.computeCarouselWidth(), this.transitionend = m(), this.$refs["VueCarousel-inner"].addEventListener(this.transitionend, this.handleTransitionEnd)
            },
            beforeDestroy: function() {
                this.detachMutationObserver(), window.removeEventListener("resize", this.getBrowserWidth), this.$refs["VueCarousel-inner"].removeEventListener(this.transitionend, this.handleTransitionEnd), this.$refs["VueCarousel-wrapper"].removeEventListener(this.isTouch ? "touchstart" : "mousedown", this.onStart)
            }
        }
    }, function(t, e, n) {
        t.exports = {
            default: n(10),
            __esModule: !0
        }
    }, function(t, e, n) {
        n(11), t.exports = n(14).Math.sign
    }, function(t, e, n) {
        var i = n(12);
        i(i.S, "Math", {
            sign: n(28)
        })
    }, function(t, e, n) {
        var i = n(13),
            r = n(14),
            a = n(15),
            o = n(17),
            s = n(27),
            u = "prototype",
            c = function(t, e, n) {
                var l, d, f, h = t & c.F,
                    p = t & c.G,
                    g = t & c.S,
                    v = t & c.P,
                    m = t & c.B,
                    b = t & c.W,
                    y = p ? r : r[e] || (r[e] = {}),
                    C = y[u],
                    x = p ? i : g ? i[e] : (i[e] || {})[u];
                p && (n = e);
                for (l in n) d = !h && x && void 0 !== x[l], d && s(y, l) || (f = d ? x[l] : n[l], y[l] = p && "function" != typeof x[l] ? n[l] : m && d ? a(f, i) : b && x[l] == f ? function(t) {
                                var e = function(e, n, i) {
                                    if (this instanceof t) {
                                        switch (arguments.length) {
                                            case 0:
                                                return new t;
                                            case 1:
                                                return new t(e);
                                            case 2:
                                                return new t(e, n)
                                        }
                                        return new t(e, n, i)
                                    }
                                    return t.apply(this, arguments)
                                };
                                return e[u] = t[u], e
                            }(f) : v && "function" == typeof f ? a(Function.call, f) : f, v && ((y.virtual || (y.virtual = {}))[l] = f, t & c.R && C && !C[l] && o(C, l, f)))
            };
        c.F = 1, c.G = 2, c.S = 4, c.P = 8, c.B = 16, c.W = 32, c.U = 64, c.R = 128, t.exports = c
    }, function(t, e) {
        var n = t.exports = "undefined" != typeof window && window.Math == Math ? window : "undefined" != typeof self && self.Math == Math ? self : Function("return this")();
        "number" == typeof __g && (__g = n)
    }, function(t, e) {
        var n = t.exports = {
            version: "2.5.4"
        };
        "number" == typeof __e && (__e = n)
    }, function(t, e, n) {
        var i = n(16);
        t.exports = function(t, e, n) {
            if (i(t), void 0 === e) return t;
            switch (n) {
                case 1:
                    return function(n) {
                        return t.call(e, n)
                    };
                case 2:
                    return function(n, i) {
                        return t.call(e, n, i)
                    };
                case 3:
                    return function(n, i, r) {
                        return t.call(e, n, i, r)
                    }
            }
            return function() {
                return t.apply(e, arguments)
            }
        }
    }, function(t, e) {
        t.exports = function(t) {
            if ("function" != typeof t) throw TypeError(t + " is not a function!");
            return t
        }
    }, function(t, e, n) {
        var i = n(18),
            r = n(26);
        t.exports = n(22) ? function(t, e, n) {
                return i.f(t, e, r(1, n))
            } : function(t, e, n) {
                return t[e] = n, t
            }
    }, function(t, e, n) {
        var i = n(19),
            r = n(21),
            a = n(25),
            o = Object.defineProperty;
        e.f = n(22) ? Object.defineProperty : function(t, e, n) {
                if (i(t), e = a(e, !0), i(n), r) try {
                    return o(t, e, n)
                } catch (t) {}
                if ("get" in n || "set" in n) throw TypeError("Accessors not supported!");
                return "value" in n && (t[e] = n.value), t
            }
    }, function(t, e, n) {
        var i = n(20);
        t.exports = function(t) {
            if (!i(t)) throw TypeError(t + " is not an object!");
            return t
        }
    }, function(t, e) {
        t.exports = function(t) {
            return "object" == typeof t ? null !== t : "function" == typeof t
        }
    }, function(t, e, n) {
        t.exports = !n(22) && !n(23)(function() {
                return 7 != Object.defineProperty(n(24)("div"), "a", {
                        get: function() {
                            return 7
                        }
                    }).a
            })
    }, function(t, e, n) {
        t.exports = !n(23)(function() {
            return 7 != Object.defineProperty({}, "a", {
                    get: function() {
                        return 7
                    }
                }).a
        })
    }, function(t, e) {
        t.exports = function(t) {
            try {
                return !!t()
            } catch (t) {
                return !0
            }
        }
    }, function(t, e, n) {
        var i = n(20),
            r = n(13).document,
            a = i(r) && i(r.createElement);
        t.exports = function(t) {
            return a ? r.createElement(t) : {}
        }
    }, function(t, e, n) {
        var i = n(20);
        t.exports = function(t, e) {
            if (!i(t)) return t;
            var n, r;
            if (e && "function" == typeof(n = t.toString) && !i(r = n.call(t))) return r;
            if ("function" == typeof(n = t.valueOf) && !i(r = n.call(t))) return r;
            if (!e && "function" == typeof(n = t.toString) && !i(r = n.call(t))) return r;
            throw TypeError("Can't convert object to primitive value")
        }
    }, function(t, e) {
        t.exports = function(t, e) {
            return {
                enumerable: !(1 & t),
                configurable: !(2 & t),
                writable: !(4 & t),
                value: e
            }
        }
    }, function(t, e) {
        var n = {}.hasOwnProperty;
        t.exports = function(t, e) {
            return n.call(t, e)
        }
    }, function(t, e) {
        t.exports = Math.sign || function(t) {
                return 0 == (t = +t) || t != t ? t : t < 0 ? -1 : 1
            }
    }, function(t, e) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var n = {
            props: {
                autoplay: {
                    type: Boolean,
                    default: !1
                },
                autoplayTimeout: {
                    type: Number,
                    default: 2e3
                },
                autoplayHoverPause: {
                    type: Boolean,
                    default: !0
                }
            },
            data: function() {
                return {
                    autoplayInterval: null
                }
            },
            destroyed: function() {
                this.$isServer || (this.$el.removeEventListener("mouseenter", this.pauseAutoplay), this.$el.removeEventListener("mouseleave", this.startAutoplay))
            },
            methods: {
                pauseAutoplay: function() {
                    this.autoplayInterval && (this.autoplayInterval = clearInterval(this.autoplayInterval))
                },
                startAutoplay: function() {
                    this.autoplay && (this.autoplayInterval = setInterval(this.advancePage, this.autoplayTimeout))
                }
            },
            mounted: function() {
                !this.$isServer && this.autoplayHoverPause && (this.$el.addEventListener("mouseenter", this.pauseAutoplay), this.$el.addEventListener("mouseleave", this.startAutoplay)), this.startAutoplay()
            }
        };
        e.default = n
    }, function(t, e) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        });
        var n = function(t, e, n) {
            var i = void 0;
            return function() {
                var r = void 0,
                    a = function() {
                        i = null, n || t.apply(r)
                    },
                    o = n && !i;
                clearTimeout(i), i = setTimeout(a, e), o && t.apply(r)
            }
        };
        e.default = n
    }, function(t, e, n) {
        function i(t) {
            n(32)
        }
        var r = n(7)(n(34), n(35), i, "data-v-7fed18e9", null);
        t.exports = r.exports
    }, function(t, e, n) {
        var i = n(33);
        "string" == typeof i && (i = [
            [t.id, i, ""]
        ]), i.locals && (t.exports = i.locals);
        n(5)("a1957e6c", i, !0, {})
    }, function(t, e, n) {
        e = t.exports = n(4)(), e.push([t.id, "", ""])
    }, function(t, e) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.default = {
            name: "navigation",
            inject: ["carousel"],
            props: {
                clickTargetSize: {
                    type: Number,
                    default: 8
                },
                nextLabel: {
                    type: String,
                    default: "Next ----"
                },
                prevLabel: {
                    type: String,
                    default: "---- Previus"
                }
            },
            computed: {
                canAdvanceForward: function() {
                    return this.carousel.canAdvanceForward || !1
                },
                canAdvanceBackward: function() {
                    return this.carousel.canAdvanceBackward || !1
                }
            },
            methods: {
                triggerPageAdvance: function(t) {
                    this.$emit("navigationclick", t)
                }
            }
        }
    }, function(t, e) {
        t.exports = {
            render: function() {
                var t = this,
                    e = t.$createElement,
                    n = t._self._c || e;
                return n("div", {
                    staticClass: "VueCarousel-navigation"
                }, [n("button", {
                    staticClass: "VueCarousel-navigation-button VueCarousel-navigation-prev",
                    class: {
                        "VueCarousel-navigation--disabled": !t.canAdvanceBackward
                    },
                    style: "padding: " + t.clickTargetSize + "px; margin-right: -" + t.clickTargetSize + "px;",
                    attrs: {
                        type: "button",
                        "aria-label": "Previous page",
                        role: "button"
                    },
                    domProps: {
                        innerHTML: t._s(t.prevLabel)
                    },
                    on: {
                        click: function(e) {
                            e.preventDefault(), t.triggerPageAdvance("backward")
                        }
                    }
                }), t._v(" "), n("button", {
                    staticClass: "VueCarousel-navigation-button VueCarousel-navigation-next",
                    class: {
                        "VueCarousel-navigation--disabled": !t.canAdvanceForward
                    },
                    style: "padding: " + t.clickTargetSize + "px; margin-left: -" + t.clickTargetSize + "px;",
                    attrs: {
                        type: "button",
                        "aria-label": "Next page",
                        role: "button"
                    },
                    domProps: {
                        innerHTML: t._s(t.nextLabel)
                    },
                    on: {
                        click: function(e) {
                            e.preventDefault(), t.triggerPageAdvance()
                        }
                    }
                })])
            },
            staticRenderFns: []
        }
    }, function(t, e, n) {
        function i(t) {
            n(37)
        }
        var r = n(7)(n(39), n(40), i, "data-v-7e42136f", null);
        t.exports = r.exports
    }, function(t, e, n) {
        var i = n(38);
        "string" == typeof i && (i = [
            [t.id, i, ""]
        ]), i.locals && (t.exports = i.locals);
        n(5)("3ea8dd5f", i, !0, {})
    }, function(t, e, n) {
        e = t.exports = n(4)(), e.push([t.id, ".VueCarousel-pagination[data-v-7e42136f]{width:100%;text-align:center}.VueCarousel-dot-container[data-v-7e42136f]{display:inline-block;margin:0 auto;padding:0}.VueCarousel-dot[data-v-7e42136f]{display:inline-block;cursor:pointer}.VueCarousel-dot-button[data-v-7e42136f]{-webkit-appearance:none;-moz-appearance:none;appearance:none;border:none;background-color:transparent;padding:0;border-radius:100%;outline:none;cursor:pointer}.VueCarousel-dot-button[data-v-7e42136f]:focus{outline:1px solid #add8e6}", ""])
    }, function(t, e) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.default = {
            name: "pagination",
            inject: ["carousel"],
            methods: {
                goToPage: function(t) {
                    this.$emit("paginationclick", t)
                },
                isCurrentDot: function(t) {
                    return t === this.carousel.currentPage
                }
            }
        }
    }, function(t, e) {
        t.exports = {
            render: function() {
                var t = this,
                    e = t.$createElement,
                    n = t._self._c || e;
                return n("div", {
                    directives: [{
                        name: "show",
                        rawName: "v-show",
                        value: t.carousel.pageCount > 1,
                        expression: "carousel.pageCount > 1"
                    }],
                    staticClass: "VueCarousel-pagination"
                }, [n("ul", {
                    staticClass: "VueCarousel-dot-container",
                    attrs: {
                        role: "tablist"
                    }
                }, t._l(t.carousel.pageCount, function(e, i) {
                    return n("li", {
                        key: i,
                        staticClass: "VueCarousel-dot",
                        class: {
                            "VueCarousel-dot--active": t.isCurrentDot(i)
                        },
                        style: "\n        margin-top: " + 2 * t.carousel.paginationPadding + "px;\n        padding: " + t.carousel.paginationPadding + "px;\n      ",
                        attrs: {
                            "aria-hidden": "false",
                            role: "presentation",
                            "aria-selected": t.isCurrentDot(i) ? "true" : "false"
                        },
                        on: {
                            click: function(e) {
                                t.goToPage(i)
                            }
                        }
                    }, [n("button", {
                        staticClass: "VueCarousel-dot-button",
                        style: "\n          width: " + t.carousel.paginationSize + "px;\n          height: " + t.carousel.paginationSize + "px;\n          background: " + (t.isCurrentDot(i) ? t.carousel.paginationActiveColor : t.carousel.paginationColor) + ";\n        ",
                        attrs: {
                            type: "button",
                            role: "button",
                            tabindex: i
                        }
                    })])
                }))])
            },
            staticRenderFns: []
        }
    }, function(t, e, n) {
        function i(t) {
            n(42)
        }
        var r = n(7)(n(44), n(45), i, null, null);
        t.exports = r.exports
    }, function(t, e, n) {
        var i = n(43);
        "string" == typeof i && (i = [
            [t.id, i, ""]
        ]), i.locals && (t.exports = i.locals);
        n(5)("e8ab14d8", i, !0, {})
    }, function(t, e, n) {
        e = t.exports = n(4)(), e.push([t.id, ".VueCarousel-slide{-ms-flex-preferred-size:inherit;flex-basis:inherit;-ms-flex-positive:0;flex-grow:0;-ms-flex-negative:0;flex-shrink:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-backface-visibility:hidden;backface-visibility:hidden;-webkit-touch-callout:none;outline:none}", ""])
    }, function(t, e) {
        "use strict";
        Object.defineProperty(e, "__esModule", {
            value: !0
        }), e.default = {
            name: "slide",
            data: function() {
                return {
                    width: null
                }
            },
            inject: ["carousel"],
            mounted: function() {
                this.$isServer || this.$el.addEventListener("dragstart", function(t) {
                    return t.preventDefault()
                })
            },
            computed: {
                activeSlides: function t() {
                    for (var e = this.carousel, n = e.currentPage, i = e.perPage, r = e.$children, t = (e.slideCount, []), a = r.filter(function(t) {
                        return t.$el && t.$el.className.includes("VueCarousel-slide")
                    }).map(function(t) {
                        return t._uid
                    }), o = 0; o < i;) {
                        var s = a[n * i + o];
                        t.push(s), o++
                    }
                    return t
                },
                isActive: function() {
                    return this.activeSlides.includes(this._uid)
                },
                isCenter: function() {
                    var t = this.carousel.perPage;
                    return !(t % 2 === 0 || !this.isActive) && this.activeSlides.indexOf(this._uid) === Math.floor(t / 2)
                }
            }
        }
    }, function(t, e) {
        t.exports = {
            render: function() {
                var t = this,
                    e = t.$createElement,
                    n = t._self._c || e;
                return n("div", {
                    staticClass: "VueCarousel-slide",
                    class: {
                        "VueCarousel-slide-active": t.isActive, "VueCarousel-slide-center": t.isCenter
                    },
                    attrs: {
                        tabindex: "-1"
                    }
                }, [t._t("default")], 2)
            },
            staticRenderFns: []
        }
    }, function(t, e) {
        t.exports = {
            render: function() {
                var t = this,
                    e = t.$createElement,
                    n = t._self._c || e;
                return n("section", {
                    staticClass: "VueCarousel"
                }, [n("div", {
                    ref: "VueCarousel-wrapper",
                    staticClass: "VueCarousel-wrapper"
                }, [n("div", {
                    ref: "VueCarousel-inner",
                    staticClass: "VueCarousel-inner",
                    style: {
                        transform: "translate3d(" + t.currentOffset + "px, 0, 0)",
                        transition: t.dragging ? "none" : t.transitionStyle,
                        "ms-flex-preferred-size": t.slideWidth + "px",
                        "webkit-flex-basis": t.slideWidth + "px",
                        "flex-basis":  t.slideWidth + "px",
                        visibility: t.slideWidth ? "visible" : "hidden",
                        "padding-left": t.padding + "px",
                        "padding-right": t.padding + "px"
                    },
                    attrs: {
                        role: "listbox"
                    }
                }, [t._t("default")], 2)]), t._v(" "), t.paginationEnabled && t.pageCount > 0 ? n("pagination", {
                        on: {
                            paginationclick: function(e) {
                                t.goToPage(e, "pagination")
                            }
                        }
                    }) : t._e(), t._v(" "), t.navigationEnabled ? n("navigation", {
                        attrs: {
                            clickTargetSize: t.navigationClickTargetSize,
                            nextLabel: t.navigationNextLabel,
                            prevLabel: t.navigationPrevLabel
                        },
                        on: {
                            navigationclick: t.handleNavigation
                        }
                    }) : t._e()], 1)
            },
            staticRenderFns: []
        }
    }])
});