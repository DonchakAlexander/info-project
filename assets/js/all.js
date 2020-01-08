!function (e) {
    var t = {
        project: {preload: [], namespace: "ym", jsonpPrefix: "", loadLimit: 500},
        ns: {},
        env: {},
        envCallbacks: []
    };
    t.modules = e.ym.modules, t.modules.define("mf.localization", ["mf.env"], function (e, t) {
        var o = {
            en: {
                widget: {
                    GOTO_YMAPS: "See full-size map",
                    search_button_text: "%found% found",
                    search_footer: "Didn't find what you were looking for?<br/>Try changing the zoom level<br/> or <a href=# class=search-popup-ymaps-link target=_blank>refining your search</a>",
                    search_more_button: "%_found_% (more result|more results|more results)",
                    search_result: 'Search results for "%text%"'
                }
            },
            fr: {
                widget: {
                    GOTO_YMAPS: "",
                    search_button_text: "",
                    search_footer: "",
                    search_more_button: "",
                    search_result: ""
                }
            },
            kk: {
                widget: {
                    GOTO_YMAPS: "Үлкен картаға",
                    search_button_text: "%found% табылды",
                    search_footer: "Іздегеніңізді таппадыңыз ба? —<br/> масштабты өзгертіңіз<br/> немесе <a href=# class=search-popup-ymaps-link target=_blank>сауалды нақтылаңыз</a>",
                    search_more_button: "Тағы %_found_% (нәтиже|нәтиже|нәтиже)",
                    search_result: "«%text%» іздеу нәтижелері"
                }
            },
            ru: {
                widget: {
                    GOTO_YMAPS: "На большую карту",
                    search_button_text: "%found% найдено",
                    search_footer: "Не нашли, что искали, —<br/> измените масштаб<br/> или <a href=# class=search-popup-ymaps-link target=_blank>уточните запрос</a>",
                    search_more_button: "Ещё %_found_% (результат|результата|результатов)",
                    search_result: "Результаты поиска «%text%»"
                }
            },
            tr: {
                widget: {
                    GOTO_YMAPS: "Haritalar'da aç",
                    search_button_text: "%found% bulundu",
                    search_footer: "Aradığınızı bulamıyorsanız <br/>ölçüyü değiştirin<br/> veya <a href=# class=search-popup-ymaps-link target=_blank>sorgunuzu netleştirin</a>",
                    search_more_button: "Daha %_found_% (sonuç|sonuç|sonuç)",
                    search_result: '"%text%" için arama sonuçları'
                }
            },
            uk: {
                widget: {
                    GOTO_YMAPS: "На велику карту",
                    search_button_text: "%found% знайдено",
                    search_footer: "Не знайшли, що шукали, —<br/>змініть масшта<br/> або <a href=# class=search-popup-ymaps-link target=_blank>уточніть запит</a>",
                    search_more_button: "Ще %_found_% (результат|результати|результатів)",
                    search_result: "Результати пошуку «%text%»"
                }
            },
            uz: {
                widget: {
                    GOTO_YMAPS: "Katta xaritaga",
                    search_button_text: "%found% ta topildi",
                    search_footer: "Qidirgan narsamizni topa olmadik, —<br/> masshtabni o‘zgartiring<br/> yoki <a href=# class=search-popup-ymaps-link target=_blank>manzilni aniqlashtiring</a>",
                    search_more_button: "Yana %_found_% (ta natija|ta natijalar|ta natijalar)",
                    search_result: "«%text%» qidiruv natijalari"
                }
            }
        };
        e(o[t.lang] && o[t.lang].widget)
    }), t.modules.define("mf.controller.activeObjects", ["vow", "mf.search.provider", "mf.search.Collection", "data.Manager", "util.defineClass", "map.associate.serviceGeoObjects", "mf.search.setupBalloonPane", "mf.search.inceptionHelper", "mf.search.displayModeHelper"], function (e, t, o, i, s, n, a, r, l, c) {
        var u = n(function (e, n) {
            this._map = e;
            var u = n.get("activeObjects");
            this._state = new s({results: []}), r(e), c(e, this._state), this._collection = new i(this._state), a.get(e).add(this._collection), this._collection.options.unset("balloonMinHeight"), this._collection.events.add("childBalloonOpen", this._onItemBalloonOpen, this).add("childBalloonClose", this._onItemBalloonClose, this), this._searchProvider = n.get("searchProvider") || o;
            var p = u.map(function (e) {
                return this._searchProvider.search(e.request).then(function (o) {
                    if (0 === o.geoObjects.getLength()) return t.reject("Object not found");
                    var i = o.geoObjects.get(0);
                    return e.position && i.geometry.setCoordinates(e.position), this._collection.add(i), n.get("mode") === e.source ? (this._collection.setActiveChild(i), l.setSearchDefault(this._map, {request: i.properties.get("address")}), this._collection.openChildBalloon(i)) : (i.properties.set("iconCaption", i.properties.get("name")), i.options.set("preset", "islands#blueCircleDotIconWith")), o
                }, this)
            }, this);
            this._requests = t.all(p)
        }, {
            getRequests: function () {
                return this._requests
            }, getResultCollection: function () {
                return this._collection
            }, _onItemBalloonOpen: function (e) {
                l.setSearch(this._map, {request: e.get("target").properties.get("address")})
            }, _onItemBalloonClose: function () {
                l.resetSearch(this._map)
            }
        });
        e(function (e, o) {
            var i = o.get("activeObjects");
            return i && i.length ? t.resolve(new u(e, o)) : t.reject("no activeObject data")
        })
    }), t.modules.define("mf.controller.constructor", ["mf.util.jsLoader", "mf.hosts", "vow"], function (e, o, i, s) {
        e(function (e, n) {
            var a = n.get("userMap");
            return a && a.maps && a.maps[0] ? (e.state.set({
                mapSid: n.get("mapSid"),
                mapSourceType: n.get("mapSourceType")
            }), o(i.widget + "1.0/show/", !0).then(function () {
                return t.modules.require("constructor.show")
            }).spread(function (t) {
                return t(e, a)
            }), s.resolve()) : s.reject()
        })
    }), t.modules.define("distribution.css", ["system.provideCss"], function (e, t) {
        t(".goto-ymaps{display:block;text-align:center}.goto-ymaps-content{padding-left:18px;background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTQiIGhlaWdodD0iMjMiIHZpZXdCb3g9IjAgMCAxNCAyMyIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtLjUgLS4yMjIpIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxwYXRoIGQ9Ik01LjUgMjMuMjIybDUuNTM1LTcuNTdzMS42LTIuMTg1IDIuNjEtNC4xNWMxLjAxLTEuOTY2Ljg0NS00LjI4Ljg0NS00LjI4TDggMTMuMiA1LjUgMjMuMjJ6IiBmaWxsPSIjQ0QwMDAwIi8+PGNpcmNsZSBmaWxsPSIjRTAwIiBjeD0iNy41IiBjeT0iNy4yMjIiIHI9IjciLz48ZWxsaXBzZSBmaWxsPSIjRkZGIiBjeD0iNy41IiBjeT0iNy4yMjIiIHJ4PSIzIiByeT0iMyIvPjwvZz48L3N2Zz4=);background-size:10px 16px;background-repeat:no-repeat;background-position:left center;display:inline-block}.goto-ymaps-content-lite{padding-left:0;background:0 0}", e)
    }), t.modules.define("mf.controller.distribution", ["mf.hosts", "mf.localization", "distribution.css", "control.Button", "meta", "mf.query", "mf.util.ymapsLink", "system.browser", "yandex.counter", "util.dom.className"], function (e, t, o, i, s, n, a, r, l, c, u) {
        function p(e) {
            function t(e) {
                var t = e.getElement();
                t && t.firstChild && t.parentNode && (t.firstChild.style.width = "100%", t.firstChild.firstChild && (t.firstChild.firstChild.style.padding = "0px"))
            }

            g = new s({
                data: {content: ["<ymaps class=goto-ymaps><ymaps class=goto-ymaps-content>", o.GOTO_YMAPS, "</ymaps></ymaps>"].join("")},
                options: {maxWidth: "99999", selectOnClick: !1}
            }), e.controls.add(g, {
                position: {
                    left: 10,
                    right: 10,
                    bottom: 5
                }
            }), g.getLayoutSync() ? t(g.getLayoutSync()) : g.getLayout().then(t), e.panes.get("copyrights").getElement().style.marginBottom = "29px", d(e)
        }

        function d(e) {
            function t(t) {
                var o = t.getElement();
                if (o) {
                    o = o.querySelector(".goto-ymaps-content");
                    var i = e.container.getSize();
                    i[0] < 175 ? u.add(o, "goto-ymaps-content-lite") : u.remove(o, "goto-ymaps-content-lite")
                }
            }

            g && (g.getLayoutSync() ? t(g.getLayoutSync()) : g.getLayout().then(t))
        }

        var h, g;
        e({
            show: function (e) {
                function t(e) {
                    c.countByKey("distribution", [e, l.platform, n.version.replace(/\W/g, "_")].join("."))
                }

                e.options.set({
                    copyrightLogoVisible: !1,
                    suppressMapOpenBlock: !0
                }), p(e), g.events.add("click", function () {
                    window.open(r.getStateLink(e, a)), t("mapsButton.smallMap")
                })
            }, onResize: function (e) {
                d(e)
            }, hide: function (e) {
                g && e.controls.remove(g), e.panes.get("copyrights").getElement().style.marginBottom = "0px", e.options.unset("copyrightLogoVisible"), e.options.set("suppressMapOpenBlock", !1), h && (h.removeAll(), h = null)
            }
        })
    }), t.modules.define("mf.controller.poi", ["vow", "Placemark", "data.Manager", "Monitor", "mf.search.displayModeHelper", "mf.util.balloonAutoPan", "mf.util.mapPoiInteractivityObserver", "mf.util.mapSizeData", "mf.util.ymapsLink", "mf.search.setupBalloonPane", "mf.controller.search", "yandex.layer.poi", "yandex.state.associate", "hotspot.layer.Object"], function (e, t, o, i, s, n, a, r, l, c, u, p, d, h, g) {
        function m(e, t) {
            return v(e, t).then(function () {
                r(e)
            }, function () {
                r(e)
            })
        }

        function f(e) {
            var i = e.eventsPaneZIndex, s = e.hotspotObject, n = e.mapData, a = e.map, r = e.hotspotLayer,
                u = e.eventsPane, d = e.poiCoords;
            if (u.setZIndex(i), !s) return t.resolve(-1);
            var h, g = s.getProperties(), m = n.get("mode"), f = "poi" === m || "stop" === m;
            return g && (h = new o(d, {iconCaption: g.name}, {
                preset: "islands#redDotIconWithCaption",
                visible: !f
            }), a.geoObjects.add(h), h.events.add("click", function () {
                l.isSmall(a.container.getSize()) ? window.open(c.getStateLink(a, {"poi[point]": s.getGeometry().coordinates})) : r.balloon.hotspotOpen(s)
            })), h && r.events.add("balloonopen", function () {
                var e = r.balloon.getOverlaySync().getLayoutSync(), t = e.getData().properties;
                C(s.getProperties(), t) && ("stop" === m && _(a, n.get("stopId")), h.options.set("visible", !1))
            }).add("balloonclose", function () {
                h.options.unset("visible")
            }), f && !l.isSmall(a.container.getSize()) ? r.balloon.hotspotOpen(s).then(function () {
                "stop" === m && _(a, n.get("stopId"))
            }) : (h.options.set("visible", !0), p(a, n, !0).then(function (e) {
                e._preventDataReload = !0, a.events.once("boundschange", function () {
                    e._preventDataReload = !1
                }), a.setCenter(h.geometry.getCoordinates())
            }, function () {
                a.setCenter(h.geometry.getCoordinates())
            }), t.resolve())
        }

        function v(e, o) {
            function i() {
                var t = a.getHostpotLayerSync();
                I(e, t);
                var i, u = {eventsPaneZIndex: l, mapData: o, map: e, hotspotLayer: t, eventsPane: r, poiCoords: s},
                    p = n.uri || n.coords;
                p && (i = new g(null, p, {interactivityModel: t.options.get("interactivityModel")}), u.hotspotObject = i, u.poiCoords = i.getGeometry().coordinates), s ? t.getObjectInPosition(s).then(function (e) {
                    return e && (u.hotspotObject = e), f(u)
                }, this).then(function (e) {
                    c.resolve(e)
                }) : f(u).then(function (e) {
                    c.resolve(e)
                })
            }

            var s = o.get("poi.coords"), n = o.get("poi.features"), a = d.get(e), r = e.panes.get("events"),
                l = r.getZIndex();
            if (a) {
                var c = t.defer();
                r.setZIndex(0);
                var u = a.getHostpotLayerSync();
                return u ? i() : a.events.add("addtomap", function () {
                    i()
                }), c.promise()
            }
            return t.resolve()
        }

        function I(e, t) {
            var o = h.get(e);
            t.events.add("balloonopen", function () {
                var t = o.get("poi.uri");
                if (t && t.indexOf("stop") !== -1) {
                    var i = /id=(.+)/gi.exec(t)[1];
                    _(e, i)
                }
            })
        }

        function _(e, t) {
            var o = h.get(e);
            o.setStopState({mode: "stop", stopId: t})
        }

        function y(e, t) {
            var o = 300, i = [0, 16], s = 70, n = e.get("target");
            if (n.balloon.getOptions().set({maxHeight: t.container.getSize()[1] - s}), 0 === n.balloon.getOptions().get("panelMaxMapArea")) {
                var r = a(t, i);
                if (!r) return;
                t.setGlobalPixelCenter(r, t.getZoom(), {duration: o, useMapMargin: !0})
            }
        }

        function M(e, t) {
            function o() {
                var o = t.getHostpotLayerSync();
                o.events.add("click", function (e) {
                    e.get("target").balloon.close()
                }), o.events.add("balloonopen", function (t) {
                    y(t, e)
                }), r.add("displayMode", function () {
                    var e = "compact" === a.get("displayMode") ? 1 / 0 : 0;
                    o.options.set({balloonAutoPan: 0 !== e, balloonPanelMaxMapArea: e, balloonPane: "mf.balloonPane"})
                }), n(e, a)
            }

            var a = new i({}), r = new s(a), l = t.getHostpotLayerSync();
            l ? o() : t.events.add("addtomap", function () {
                o()
            })
        }

        function C(e, t) {
            return e.uri ? e.uri === t.get("uri") : e.name === t.get("name")
        }

        e({
            controller: function (e, t) {
                var o = d.get(e);
                u(e), M(e, o), m(e, t)
            }, activePoi: m
        })
    }), t.modules.define("mf.controller.points", ["vow", "Placemark"], function (e, t, o) {
        e(function (e, i) {
            var s = i.get("placemarks");
            return s && s.forEach(function (t) {
                e.geoObjects.add(new o(t.geometry.coordinates, {}, t.options))
            }), t.resolve()
        })
    }), t.modules.define("mf.controller.resize", ["vow", "mf.controller.distribution", "mf.search.Control"], function (e, t, o, i) {
        var s = [220, 200], n = ["rulerControl", "trafficControl", "geolocationControl"];
        e(function (e, a) {
            function r() {
                for (var t = e.container.getSize(), r = t[0] < s[0], l = r || t[1] < s[1], c = 0, u = n.length; c < u; c++) e.controls.get(n[c]).options.set("visible", !l);
                e.controls.each(function (e) {
                    e instanceof i && e.options.set("visible", !l)
                }), !e.state.get("narrowMode") && e.options.get("suppressMapOpenBlock", !1) || (e.state.get("narrowMode") !== r ? r ? o.show(e, a) : o.hide(e, a) : r && o.onResize(e, a)), e.state.get("compactMode") !== l && (l ? e.controls.get("zoomControl").options.set({
                    size: "small",
                    position: {top: 10, left: 10}
                }) : e.controls.get("zoomControl").options.unset(["size", "position"])), e.state.set({
                    compactMode: l,
                    narrowMode: r
                })
            }

            return e.events.add("sizechange", r), e.controls.events.add("add", r), r(), t.resolve()
        })
    }), t.modules.define("mf.controller.route", ["vow", "route", "geocode", "util.bounds", "system.browser"], function (e, t, o, i, s, n) {
        function a(e) {
            var t = e.get("userMap"), o = e.get("search"), i = e.get("activeObjects"), s = e.get("mode");
            if ("routes" === s) return !0;
            if ("poi" === s || "stop" === s) return !1;
            var n = 0;
            return t && t.maps && t.maps[0] || n++, o && o.request || n++, i && i.length || n++, 3 === n
        }

        function r(e) {
            if (m) {
                var t = e.getActiveRoute();
                t && t.balloon.open()
            }
        }

        function l(e, t) {
            if (m) {
                var o = e.getBounds(), i = t.getBounds(), n = s.containsBounds(o, i);
                if (!n) {
                    var a = e.container.getSize(), r = s.getCenterAndZoom(i, a);
                    e.setCenter(r.center, r.zoom)
                }
            }
        }

        function c(e, t, o) {
            var i = o.emptyIndex, s = Math.abs(i - 1), a = t.getWayPoints();
            a.get(s).options.set({draggable: !1, cursor: "arrow"});
            var c = function () {
                return n.isMobile && e.getZoom() !== d ? void (d = e.getZoom()) : (setTimeout(function () {
                    t.editor.isActive() && t.editor.stop()
                }, 0), t.events.add("update", function () {
                    a.get(i).options.set("draggable", !0);
                    var o = a.get(s);
                    o.options.unset("cursor"), o.properties.set("name", h[s]), t.options.set("visible", !0), a.getLength() > 1 && u(a.get(i), i, 2), g && (l(e, t), r(t), g = !1)
                }), void e.events.remove("mouseup", c))
            };
            e.events.add("mouseup", c), t.editor.start({
                addWayPointsIndex: i,
                addWayPointsType: 0 === i ? "start" : "finish",
                addWayPoints: !0
            })
        }

        function u(e, o, s) {
            var n = e.geometry.getCoordinates();
            return n ? i(e.geometry.getCoordinates()).then(function (t) {
                var i = t.geoObjects.get(0);
                if (i) {
                    var n = i.properties.get("name");
                    h[o] = n, 0 !== o && o !== s - 1 ? p(e, n) : e.properties.set("name", n)
                }
            }) : t.resolve()
        }

        function p(e, t) {
            e.events.add("click", function () {
                var o = e.properties;
                o.set("name", o.get("name") ? "" : t)
            })
        }

        var d, h = {}, g = !0, m = !0;
        e(function (e, i) {
            m = a(i);
            var s = i.get("route");
            if (!s) return t.resolve();
            var n = t.defer();
            return e.events.once("boundschange", function (e) {
                d = e.get("newZoom")
            }), o(s.wayPoints, {
                multiRoute: !0,
                routingMode: s.type,
                viaIndexes: s.viaIndexes,
                activeRouteAutoSelection: !1,
                avoidTrafficJams: s.avoidTrafficJams
            }).then(function (o) {
                if (m && o.options.set("boundsAutoApply", !0), s.rtn) {
                    var i = o.getRoutes(), a = i.get(s.rtn);
                    a && o.setActiveRoute(a)
                }
                var l = o.getWayPoints(), p = [], h = l.getLength();
                l.each(function (e, t) {
                    p.push(u(e, t, h))
                }), t.all(p).always(function () {
                    e.geoObjects.add(o), n.resolve(), r(o), d = e.getZoom(), s.hasOwnProperty("emptyIndex") && c(e, o, s)
                })
            }, function (e) {
                n.reject(e)
            }), n.promise()
        })
    }), t.modules.define("mf.controller.ruler", ["vow"], function (e, t) {
        e(function (e, o) {
            return e.behaviors.get("ruler").setState(o.get("rulerState")), t.resolve()
        })
    }), t.modules.define("scroll-zoom.css", ["system.provideCss"], function (e, t) {
        t(".ymaps-scroll-blocker{position:absolute;top:0;left:0;width:100%;height:100%}", e)
    }), t.modules.define("mf.controller.scrollZoom", ["vow", "domEvent.manager", "util.defineClass", "mf.ua", "scroll-zoom.css"], function (e, t, o, i, s) {
        var n = 3, a = 150, r = i(function (e) {
            this._map = e, this._count = 0, this._blocker = document.createElement("div"), this._blocker.className = "ymaps-scroll-blocker", this._eventsList.forEach(function (e) {
                this["on" + e + "Bound"] = this["on" + e].bind(this), document.documentElement.addEventListener(e.toLowerCase(), this["on" + e + "Bound"])
            }, this), e.events.add("wheel", this.onMapWheel, this)
        }, {
            destruct: function () {
                this._setScrollState(!0), this._blocker = null, this._eventsList.forEach(function (e) {
                    document.documentElement.removeEventListener(e.toLowerCase(), this["on" + e + "Bound"])
                }, this), this._map.events.remove(document.documentElement, "wheel", this.onWheel, this)
            }, _scrollState: !0, _over: !1, _setScrollState: function (e) {
                this._scrollState !== e && document.body[(e ? "remove" : "append") + "Child"](this._blocker), this._scrollState = e
            }, _eventsList: ["MouseEnter", "MouseMove", "MouseWheel", "MouseLeave"], onMouseEnter: function () {
                this._over = !0, clearTimeout(this._timeout)
            }, onMapWheel: function (e) {
                this._over || this._scrollState !== !0 || (this._count = 0, this._setScrollState(!1), e.preventDefault())
            }, onMouseWheel: function () {
                document.documentElement.removeEventListener("mousewheel", this.onMouseWheelBound), this._timeout = setTimeout(function () {
                    this._setScrollState(!0), this._over = !0
                }.bind(this), a)
            }, onMouseMove: function () {
                this._count++, this._count >= n && this._setScrollState(!0)
            }, onMouseLeave: function () {
                this._count = 0, this._over = !1, this._setScrollState(!0)
            }
        });
        e(function (e, o) {
            return s.isTouch ? t.resolve() : t.resolve(new r(e, o))
        })
    }), t.modules.define("mf.controller.search", ["mf.search.provider", "mf.search.Control", "mf.search.Collection", "data.Manager", "util.defineClass", "pane.StaticPane", "vow", "util.extend", "util.bounds", "Monitor", "mf.meta.config", "mf.util.id", "mf.search.setupBalloonPane", "mf.search.displayModeHelper", "map.associate.serviceGeoObjects", "mf.search.inceptionHelper"], function (e, t, o, i, s, n, a, r, l, c, u, p, d, h, g, m, f) {
        var v, I = n(function (e, o) {
            this._map = e, this._mapData = o;
            var n = o.get("search");
            this._searchProvider = o.get("searchProvider") || t, this._request = l({}, n.request), this._isSearchMode = "search" === o.get("mode"), n.showControl ? this._setupControl() : this._state = new s({results: []}), this._state.set("originRequest", this._request), h(e), g(e, this._state), this._resultCollection = new i(this._state), m.get(e).add(this._resultCollection), this._resultCollection.events.add("childBalloonOpen", this._onItemBalloonOpen, this).add("childBalloonClose", this._onItemBalloonClose, this).add("childAutopanStart", this._onChildAutopanStart, this).add("childAutopanEnd", this._onChildAutopanEnd, this), this._makeRequest(!0).then(this._firstRequestHandler, this), this._map.events.add("click", this._deselectButton, this).add("boundschange", this._onMapBoundsChange, this).add("balloonopen", this._onMapBalloonOpen, this), this._searchControl && this._map.controls.get("trafficControl").events.add("expand", this._checkPopupVisibility, this), this._setMapState()
        }, {
            getCurrentRequest: function () {
                return this._currentRequest
            }, getResultCollection: function () {
                return this._resultCollection
            }, _setupControl: function () {
                this._searchControl = new o({data: {request: this._request}}), this._state = this._searchControl.state, this._searchControl.events.add("select", function () {
                    var e = this._map.balloon;
                    e.isOpen() && e.close(!0)
                }, this).add("loadmorerequest", function () {
                    this._makeRequest()
                }, this).add("resultselect", this._onResultSelect, this), this._stateMonitor = new u(this._state), this._stateMonitor.add("displayMode", this._checkButtonVisibility, this)
            }, _makeRequest: function (e) {
                if (!this._currentRequest || e) {
                    e && (this._requestSkip = 0);
                    var t = [this._searchProvider.search(this._getRequestObject())];
                    e && this._request.business_oid && t.push(this._searchProvider.search(this._getRequestObject(!0))), e && this._state.set("requestId", this._state.get("requestId", 0) + 1), this._currentRequest = r.all(t);
                    var o = this._currentRequest;
                    o.id = d.get(), this._currentRequest.spread(function (t, i) {
                        if (this._currentRequest && o.id === this._currentRequest.id) {
                            this._currentRequest = null;
                            var s, n = e ? [] : this._state.get("results", []), a = this._request.business_oid,
                                r = t.geoObjects.properties.getAll(), c = r.resultsArray.concat(),
                                u = this._selectedResult && Number(this._selectedResult.properties.get("clientId"));
                            i && u === a && (i = null);
                            var d;
                            if (i && (d = !c.every(function (e, o) {
                                var i = Number(e.properties.get("requestId")), s = Number(e.properties.get("clientId"));
                                return i !== a && s !== a || (t.geoObjects.remove(e), c.splice(o, 1), !1)
                            }, this), d || r.found++), u && (d = !c.every(function (e, o) {
                                return Number(e.properties.get("clientId")) !== u || (t.geoObjects.remove(e), c.splice(o, 1), !1)
                            }, this), d || r.found++), this._selectedResult && c.unshift(this._selectedResult), i && i.geoObjects.getLength() ? (n = n.concat(i.geoObjects.properties.getAll().resultsArray, c), s = n.length - 1) : (n = n.concat(c), s = n.length), this._state.set(l({}, r, {
                                isLoaded: !0,
                                results: n,
                                found: r.found
                            })), this._requestCtx = r.requestContext, this._requestSkip = s, e) {
                                for (var h = this._resultCollection.toArray().slice(), g = 0, m = h.length; g < m; g++) h[g] !== this._selectedResult && this._resultCollection.remove(h[g]);
                                i && i.geoObjects.getLength() && this._resultCollection.add(i.geoObjects.get(0), 0)
                            }
                            this._resultCollection.fill(t.geoObjects);
                            var f = this._findActiveItem();
                            if (f && this._resultCollection.setActiveChild(f), e) {
                                var v = t.responseMetaData;
                                if (p.searchShowAdvert && v) {
                                    var I = l({}, v.SearchRequest, v.SearchResponse);
                                    this._state.set("advert", I.Banners && I.Banners[0])
                                }
                            }
                            return t
                        }
                    }, this)
                }
                return this._currentRequest
            }, _checkPopupVisibility: function () {
                this._searchControl.isSelected() && !this._canShowPopup() && this._searchControl.deselect()
            }, _firstRequestHandler: function () {
                this._firstRequestDone = !0;
                var e = this._findActiveItem();
                e && this._isSearchMode && this._resultCollection.openChildBalloon(e), this._searchControl && (this._checkButtonVisibility(), this._canShowPopup() && this._searchControl.select())
            }, _canShowPopup: function () {
                return !this._resultCollection.getActiveChild() && this._isSearchMode && "full" === this._state.get("displayMode") && (!this._map.controls.get("trafficControl").isExpanded() || this._map.container.getSize()[0] >= 610)
            }, _findActiveItem: function () {
                if (1 === this._request.results) return this._resultCollection.get(0);
                var e, t = this._request.business_oid;
                return t ? this._resultCollection.each(function (o) {
                    if (Number(o.properties.get("requestId")) === t) return e = o, !1
                }) : "single" === this._state.get("display") && (e = this._resultCollection.get(0)), e
            }, _onResultSelect: function (e) {
                var t = e.get("index"), o = this._resultCollection.get(t);
                o && this._resultCollection.openChildBalloon(o)
            }, _getRequestObject: function (e) {
                var t;
                if (e) t = l({}, this._request), delete t.text, delete t.ctx; else {
                    var o = c.toCenterAndSpan(this._map.getBounds(), this._map.options.get("projection"));
                    o.ctx = this._requestCtx, o.skip = this._requestSkip, t = l({}, this._request, o), t.text && delete t.business_oid
                }
                return delete t.displayText, t
            }, _onMapBoundsChange: function () {
                this._preventDataReload || (this._deselectButton(), this._makeRequest(!0))
            }, _onChildAutopanStart: function () {
                this._preventDataReload = !0
            }, _onChildAutopanEnd: function () {
                this._preventDataReload = !1
            }, _onMapBalloonOpen: function () {
                this._deselectButton()
            }, _onItemBalloonOpen: function (e) {
                for (var t = e.get("target"), o = this._state.get("results"), i = 0, s = o.length; i < s; i++) o[i] === t && (this._selectedResult = t, this._saveSelectedResult());
                this._setMapState(t.properties.get("clientId"), t.properties.get("ol"))
            }, _saveSelectedResult: function () {
                this._mapData.set({searchSelectedResult: this._selectedResult})
            }, _onItemBalloonClose: function () {
                var e = this._state.get("results");
                e.length > 1 && (this._selectedResult = null, this._setMapState(), this._saveSelectedResult())
            }, _deselectButton: function () {
                this._searchControl && this._searchControl.deselect()
            }, _setMapState: function (e, t) {
                var o = {request: this._request.displayText, searchContext: this._request.ctx || this._requestCtx};
                this._isSearchMode && f.setSearchDefault(this._map, o), e ? (o.resultId = e, o.resultLayer = t, f.setSearch(this._map, o)) : f.resetSearch(this._map)
            }, _checkButtonVisibility: function () {
                if (this._firstRequestDone) {
                    var e = this._searchControl.getParent(), t = this._state.get("displayMode");
                    e && "hidden" === t ? this._map.controls.remove(this._searchControl) : e || "hidden" === t || this._map.controls.add(this._searchControl)
                }
            }
        });
        e(function (e, t, o) {
            var i = t.get("search");
            return i && i.request ? (v = o ? v || new I(e, t) : new I(e, t), r.resolve(v)) : r.reject("no search data")
        })
    }), t.modules.define("mf.masstransit.provider", ["yandex.masstransitStopProvider"], function (e, t) {
        var o = {
            search: function (e) {
                return t.getStopByUri(e.uri).then(function (e) {
                    return [e]
                }).then(void 0, function () {
                    return null
                })
            }
        };
        e(o)
    }), t.modules.define("mf.controller.stops", ["vow", "mf.masstransit.provider", "mf.controller.poi"], function (e, t, o, i) {
        e(function (e, s) {
            var n = t.defer(), a = s.get("stopId"), r = "ymapsbm1://transit/stop?id=" + a;
            return a ? (o.search({uri: r}).then(function (t) {
                var o;
                t && t[0] && (o = t[0], o.properties.URIMetaData = {URIs: [{uri: r}]}, o.properties.HotspotMetaData = {tags: ["mtr"]}), s.set({
                    stopId: a,
                    poi: {features: {uri: o}}
                }), i.activePoi(e, s)
            }), n.promise()) : t.resolve()
        })
    }), t.modules.define("mf.controller.traffic", ["vow"], function (e, t) {
        var o = ["mon", "tue", "wed", "thu", "fri", "sat", "sun"];
        e(function (e, i) {
            var s = t.defer(), n = i.get("traffic"), a = !1;
            if (n) {
                var r = e.controls.get("trafficControl"), l = {trafficShown: !0};
                if (n.provider) {
                    if (l.providerKey = n.provider, n.meta) if (r.getProvider(n.provider).state.set("infoLayerShown", n.meta.infoLayerShown), "traffic#archive" === n.provider) {
                        if (n.meta.dow && n.meta.time && o.indexOf(n.meta.dow) > -1) {
                            var c = n.meta.time.split(",");
                            a = !0, r.getProvider(n.provider).setTime({
                                dayOfWeek: n.meta.dow,
                                hours: Number(c[0]),
                                minutes: Number(c[1])
                            }, function () {
                                s.resolve()
                            })
                        }
                    } else r.getProvider(n.provider).state.set("timeOffset", Number(n.meta.offset));
                    "traffic#actual" !== n.provider && r.expand()
                }
                r.state.set(l)
            }
            return a || s.resolve(), s.promise()
        })
    }), t.modules.define("main.css", ["system.provideCss"], function (e, t) {
        t("body,html{width:100%;height:100%;padding:0;margin:0;overflow:hidden}", e)
    }), t.modules.define("mf.main", ["Map", "mf.query", "mf.meta.mapData", "mf.preloadedMap", "mf.controller.constructor", "mf.controller.traffic", "mf.controller.ruler", "mf.controller.resize", "mf.controller.points", "mf.controller.search", "mf.controller.route", "mf.controller.scrollZoom", "mf.controller.activeObjects", "mf.controller.createMapContainer", "mf.controller.poi", "mf.controller.stops", "mf.util.yametrika", "main.css"], function (e, t, o, i, s, n, a, r, l, c, u, p, d, h, g, m, f, v) {
        function I() {
            var o = new t(y, M.get("mapState"), M.get("mapOptions"));
            n(o, M), a(o, M), r(o, M), c(o, M), u(o, M), p(o, M), l(o, M), d(o, M), h(o, M), m.controller(o, M), f(o, M), e(y)
        }

        function _(e) {
            var t = e.get("search"), i = function (t) {
                var o = e.get("mode");
                return "search" === o && "biz" === t ? "biz" : "search" === o && "geo" === t ? "toponym" : e.get("mode")
            }(o.ol), s = e.get("route"), n = e.get("mapSid"), a = e.get("placemarks"), r = function (e) {
                if (e) return e.indexOf("trf") !== -1 ? "traffic" : e.indexOf("st") !== -1 ? "panorama" : void 0
            }(o.l), l = {mfObject: i};
            t && t.showControl && (l.mfSearchControl = 1), s && s.type && (l.mfRouteType = s.type), n && (l.mfConstructor = 1), a && a.length > 0 && (l.mfPoints = 1), "api-maps" === o.from && (l.mfFromApiMaps = 1), r && (l.mfLayer = r), e.get("isPanorama") && (l.mfPanoPlayer = 1), v.reachGoal("MAP_STATE", l)
        }

        var y = g(), M = i(o, s);
        _(M), I()
    }), t.modules.define("mf.meta.config", ["meta"], function (e, t) {
        e({
            searchBalloonModeWidth: 460,
            searchMinMapWidth: 295,
            searchMinMapHeight: 250,
            searchShowAdvert: "RU" === t.countryCode,
            poiInteractivityMinMapWidth: 295,
            poiInteractivityMinMapHeight: 400
        })
    }), t.modules.define("mf.meta.mapData", ["data.Manager"], function (e, t) {
        e(function (e, o) {
            function i(e, t, o) {
                var i = String(e).split(",").map(Number);
                return 2 === i.length && !i.some(isNaN) && (t[o] = i, !0)
            }

            function s(t, o) {
                o = o || {}, l.search = {
                    showControl: !0,
                    request: {text: t, displayText: o.displayText || t, ctx: e.sctx, results: 10}
                }, o.geometry && (l.search.request.geometry = 1, l.search.request.geocoder_pin = 1), e.sll && (l.search.request.ll = e.sll.split(",")), e.sspn && (l.search.request.spn = e.sspn.split(","))
            }

            var n = o && o.maps && o.maps[0] && o.maps[0].state, a = {
                center: [e["center[0]"], e["center[1]"]],
                zoom: e.zoom,
                controls: ["geolocationControl", "trafficControl", "zoomControl", "rulerControl"]
            };
            e["bounds[0][0]"] && e["bounds[0][1]"] && e["bounds[1][0]"] && e["bounds[1][1]"] && (a.bounds = [[e["bounds[0][0]"], e["bounds[0][1]"]], [e["bounds[1][0]"], e["bounds[1][1]"]]]);
            var r = {
                zoomControlSize: "small",
                suppressMapOpenBlock: !1,
                rulerBalloonAutoPan: !1,
                forceAdvert: !0,
                yandexMapDisablePoiInteractivity: !1
            }, l = {mapOptions: r, mapState: a, rulerState: e.rl};
            if (e.um) {
                var c = e.um.split(":");
                1 === c.length && c.unshift("mymaps"), l.mapSid = c[1], l.mapSourceType = c[0], l.userMap = o
            }
            e.mode && ["poi", "search", "whatshere", "routes", "stop"].indexOf(e.mode) > -1 && (l.mode = e.mode);
            var u = {cur: "traffic#actual", arc: "traffic#archive", "for": "traffic#forecast"};
            if (e.trfm && u.hasOwnProperty(e.trfm)) {
                if (l.traffic = {}, l.traffic.provider = u[e.trfm], l.traffic.meta = {}, e.trfst) {
                    var p = e.trfst.split("~");
                    p.forEach(function (e) {
                        var t = e.split(":");
                        l.traffic.meta[t[0]] = t[1]
                    })
                }
                e.trfe && (l.traffic.meta.infoLayerShown = !0)
            } else n && n.traffic && n.traffic.shown ? l.traffic = {} : e.l && e.l.indexOf("trf") > -1 && (l.traffic = {provider: "traffic#actual"}, e.l.indexOf("trfe") > -1 && (l.traffic.meta = {infoLayerShown: !0}));
            var d = {pmbl: "islands#blueDotIcon", pmrd: "islands#redDotIcon", pmgn: "islands#greenDotIcon"};
            if (e.pt) {
                l.placemarks = [];
                var h = e.pt.split("~");
                h.forEach(function (e) {
                    var t = e.split(","), o = {
                        geometry: {type: "Point", coordinates: [Number(t[0]), Number(t[1])]},
                        options: {preset: d[t[2]] || "islands#blueDotIcon"}
                    };
                    l.placemarks.push(o)
                })
            }
            if (e.rtext) {
                var g = e.rtext.split("~");
                l.route = {wayPoints: [], type: "auto"};
                var m = g.length;
                g.forEach(function (e, t) {
                    var o = e.split(",");
                    o = [Number(o[0]), Number(o[1])], isNaN(o[0]) || isNaN(o[1]) ? (l.route.emptyIndex = t, l.route.wayPoints.push(void 0)) : l.route.wayPoints.push(o.reverse())
                }), 1 === m && (l.route.emptyIndex = 1, l.route.wayPoints.push(void 0));
                var f = {auto: "auto", mt: "masstransit", pd: "pedestrian", bc: "bicycle"};
                if (e.rtt && f.hasOwnProperty(e.rtt) && (l.route.type = f[e.rtt]), l.route.viaIndexes = [], e.via) {
                    var v = e.via.split("~");
                    v.forEach(function (e) {
                        l.route.viaIndexes.push(Number(e))
                    })
                }
                l.route.rtn = e.rtn || "0", l.route.avoidTrafficJams = "atm" !== e.rtm
            }
            if (e.chain ? s("chain_id:(" + e.chain + ")", {displayText: e.text}) : e.text && s(e.text, {geometry: !0}), e.ol) if (["biz", "geo"].indexOf(e.ol) > -1) {
                if (l.search = l.search || {request: {}}, l.search.request.type = e.ol, "biz" === e.ol) l.search.request.business_oid = Number(e.oid); else if ("geo" === e.ol) {
                    l.search = null;
                    var I = {text: e.text, type: "geo", uri: e.ouri, geometry: 1, geocoder_pin: 1, results: 1};
                    e.sll && (I.ll = e.sll.split(",")), e.sspn && (I.spn = e.sspn.split(",")), l.activeObjects = [{
                        source: "search",
                        request: I
                    }]
                }
            } else delete l.search;
            if (l.search && !l.mode && (l.mode = "search"), "mtr" === e.ol && (e["masstransit[stopId]"] = e.oid), e["masstransit[stopId]"] && (l.stopId = e["masstransit[stopId]"], l.mode || (l.mode = "stop")), e["whatshere[point]"]) {
                l.activeObjects = l.activeObjects || [];
                var _ = Number(e["whatshere[zoom]"]), y = e["whatshere[point]"].split(",");
                y.map(function (e) {
                    return Number(e)
                }), l.activeObjects.push({
                    source: "whatshere",
                    position: [Number(y[0]), Number(y[1])],
                    request: {
                        text: y.reverse().join(","),
                        z: _,
                        geocoder_z: _,
                        type: "geo",
                        results: 1,
                        geometry: 1,
                        geocoder_pin: 1
                    }
                }), l.mode || (l.mode = "whatshere")
            }
            if (l.poi = {features: {uri: void 0, coords: void 0}}, !l.stopId) {
                if (e["poi[point]"]) {
                    var M = e["poi[point]"].split(",");
                    M = [Number(M[0]), Number(M[1])], isNaN(M[0]) || isNaN(M[1]) || (l.poi.coords = M, l.mode || (l.mode = "poi"))
                }
                e["poi[byUri]"] && (l.poi.features.uri = JSON.parse(e["poi[byUri]"]), l.mode || (l.mode = "poi")), e["poi[byCoords]"] && (l.poi.features.coords = JSON.parse(e["poi[byCoords]"]), l.mode || (l.mode = "poi"))
            }
            return l.isPanorama = "true" === e["panorama[full]"], e["panorama[point]"] && (i(e["panorama[point]"], l, "pPoint") || (l.isPanorama = !1)), e["panorama[span]"] && i(e["panorama[span]"], l, "pSpan"), e["panorama[direction]"] && i(e["panorama[direction]"], l, "pDirection"), e["panorama[air]"] && (l.pAir = !0), new t(l)
        })
    }), t.modules.define("mf.search.Collection", ["util.defineClass", "GeoObjectCollection", "util.pixelBounds", "Monitor", "GeoObject", "util.extend", "mf.util.balloonAutoPan", "mf.meta.config", "mf.util.ymapsLink", "mf.hosts", "util.preset", "constants.zIndex", "localization.common.current", "theme.islands.islets.search.popup.layout.Advert", "theme.islands.islets.search.layout.OpenInYmaps", "theme.islands.islets.control.search.layout.card.Metro", "theme.islands.islets.control.search.layout.card.Status", "theme.islands.islets.control.search.layout.card.Contacts"], function (e, t, o, i, s, n, a, r, l, c, u, p, d, h) {
        var g = 300, m = 70, f = [0, 16], v = {
            geometrycollection: {
                strokeWidth: 2,
                strokeOpacity: .7,
                strokeColor: "d54747",
                fillOpacity: .05,
                fillColor: "ff4141"
            },
            multilinestring: {strokeColor: "000000", strokeWidth: 6, strokeOpacity: .35},
            polygon: {strokeWidth: 2, strokeOpacity: .7, strokeColor: "d54747", fillOpacity: .05, fillColor: "ff4141"},
            linestring: {strokeColor: "000000", strokeWidth: 6, strokeOpacity: .35}
        }, I = "islands#blueCircleDotIcon", _ = t(function (e) {
            _.superclass.constructor.apply(this, arguments), this._state = e, this._stateMonitor = new s(this._state), this._stateMonitor.add("displayMode", this._setupBalloonDisplaying, this), this._setupBalloonDisplaying(), this.options.set({
                preset: I,
                balloonContentLayout: "islands#islets-searchControlCardLayout",
                balloonCardMetroLayout: "islands#islets-searchControlCardMetroLayout",
                balloonCardContactsLayout: "islands#islets-searchControlCardContactsLayout",
                balloonCardStatusLayout: "islands#islets-searchControlCardStatusLayout",
                balloonCardOpenInYmapsLayout: "islands#islets-searchControlCardOpenInYmapsLayout",
                balloonCardShowAdvert: !0,
                balloonCardShowReviewLink: !0,
                balloonMinWidth: 250,
                balloonMaxWidth: 350,
                balloonPane: "mf.balloonPane",
                balloonCardAddOrgUrl: h.ppo.Card.spravAddUrl.replace("{mapsHost}", u.maps)
            }), this.events.add("add", this._onChildAdd, this).add("balloonopen", this._onBalloonOpen, this).add("balloonclose", this._onBalloonClose, this).add("click", this._onClick, this).add("mouseenter", this._onMouseEnter, this).add("mouseleave", this._unSelectItem, this)
        }, o, {
            fill: function (e) {
                e.toArray().forEach(function (e) {
                    e.getParent() !== this && this.add(e)
                }, this)
            }, openChildBalloon: function (e, t) {
                if (e.getParent() === this) if (this.options.get("openBalloonOnClick", !0)) e.balloon.open(); else if (t) this._openYmaps(e); else {
                    var o = this.getMap(),
                        i = o.options.get("projection").toGlobalPixels(e.geometry.getCoordinates(), o.getZoom());
                    o.setGlobalPixelCenter(i, o.getZoom(), {duration: g, useMapMargin: !0})
                }
            }, getActiveChild: function () {
                return this._lastActiveChild
            }, setActiveChild: function (e) {
                if (this._lastActiveChild && this._lastActiveChild.getParent() === this && (this._lastActiveChild.options.unset("zIndex"), this._lastActiveChild.properties.unset("iconCaption"), p.removeFrom(this._lastActiveChild.options, "islands#redDotIconWithCaption")), e.getParent() === this) {
                    e.options.set("zIndex", d.hover - 1);
                    var t = this._getPreset(e);
                    t && p.removeFrom(e.options, t), p.addTo(e.options, "islands#redDotIconWithCaption");
                    var o = e.properties;
                    o.set("iconCaption", o.get("name")), this._lastActiveChild = e;
                    var i = e.properties.get("figureGeometry");
                    i && i.forEach(function (e) {
                        var t = e.type.toLocaleLowerCase();
                        if (v[t]) {
                            var o = new n({geometry: e}, a({
                                hasBalloon: !1,
                                hasHint: !1,
                                cursor: "grab",
                                interactive: !1
                            }, v[t]));
                            this.add(o)
                        }
                    }, this)
                }
            }, _onChildAdd: function (e) {
                var t = e.get("child"), o = t.properties.get("companyMetaData");
                o && o.Advert && p.addTo(t.options, "islands#violetCircleDotIcon")
            }, _onClick: function (e) {
                this.options.get("openBalloonOnClick", !0) === !1 && this._openYmaps(e.get("target"))
            }, _openYmaps: function (e) {
                window.open(c.getPlacemarkLink(e))
            }, _onBalloonOpen: function (e) {
                var t = this.getMap(), o = e.get("target");
                this._setupMapSizeCheck();
                var i;
                if (0 === this.options.get("balloonPanelMaxMapArea")) {
                    if (i = r(t, f), !i) return void this.events.fire("childBalloonOpen", {target: o})
                } else i = t.options.get("projection").toGlobalPixels(o.geometry.getCoordinates(), t.getZoom());
                this.events.fire("childAutopanStart", {target: o}), t.setGlobalPixelCenter(i, t.getZoom(), {
                    duration: g,
                    useMapMargin: !0
                }).then(function () {
                    this.events.fire("childAutopanEnd", {target: o})
                }, this), this.events.fire("childBalloonOpen", {target: o})
            }, _onBalloonClose: function (e) {
                var t = e.get("target");
                t === this._selectedItem && this._unSelectItem(), this._teardownMapSizeCheck(), this.events.fire("childBalloonClose", {target: e.get("target")})
            }, _setupMapSizeCheck: function () {
                this._checkSizeListener = this.getMap().events.group().add("sizechange", this._onMapSizeChange, this), this._onMapSizeChange()
            }, _teardownMapSizeCheck: function () {
                this._checkSizeListener && this._checkSizeListener.removeAll()
            }, _onMapSizeChange: function () {
                this.options.set("balloonMaxHeight", this.getMap().container.getSize()[1] - m)
            }, _setupBalloonDisplaying: function () {
                var e = {openBalloonOnClick: !0, balloonAutoPan: !1}, t = this._state.get("displayMode");
                "hidden" === t ? e.openBalloonOnClick = !1 : "compact" === t ? e.balloonPanelMaxMapArea = 1 / 0 : e.balloonPanelMaxMapArea = 0, this.options.set(e)
            }, _onMouseEnter: function (e) {
                this._unSelectItem();
                var t = e.get("target");
                t !== this.getActiveChild() && ("point" === t.geometry.getType().toLowerCase() ? (t.properties.set("iconCaption", t.properties.get("name")), this._selectedItem = t) : this._selectedItem = null)
            }, _unSelectItem: function () {
                this._selectedItem && (this._selectedItem.properties.unset("iconCaption"), this._selectedItem = null)
            }, _getPreset: function (e) {
                var t = e.options.get("preset");
                if ("object" == typeof t && t.hasOwnProperty("length")) {
                    var o = t;
                    t = null, o.forEach(function (e) {
                        if ("string" == typeof e) return t = e, !1
                    })
                }
            }
        });
        e(_)
    }), t.modules.define("mf.search.Control", ["vow", "control.Button", "util.defineClass", "Monitor", "pane.StaticPane", "util.extend", "mf.localization", "mf.meta.config", "mf.util.inlineImages"], function (e, o, i, s, n, a, r, l, c, u) {
        var p = s(function (e) {
            e = e || {}, p.superclass.constructor.call(this, e), this.options.set({
                maxWidth: 120,
                size: "large"
            }), this.events.add("select", this._requirePopupItemLayout, this).add("deselect", this._destroyPopupItemLayout, this), this._stateMonitor = new n(this.state), this._stateMonitor.add("found", this._updateContent, this).add("displayMode", this._updateContent, this), this._updateContent()
        }, i, {
            _requirePopupItemLayout: function () {
                this._popupPromise || (this._popupPromise = o.all([t.modules.require(["mf.search.PopupLayout"]), this.getLayout()]).spread(function (e, t) {
                    if (t.getElement() && this._popupPromise) {
                        this._popupPromise = null;
                        var o;
                        if ("full" === this.state.get("displayMode")) o = t.getElement().parentNode; else {
                            var i = this.getMap();
                            this._pane = new a(i, {
                                zIndex: 100500,
                                css: {width: "100%", position: null, top: null, left: null}
                            }), i.panes.append("mf.searchPopupPane", this._pane), o = this._pane.getElement()
                        }
                        this._createPopupItemLayout(e[0], o)
                    }
                }, this))
            }, _createPopupItemLayout: function (e, t) {
                this._popupLayout || (this._popupLayout = new e({
                    control: this,
                    options: this.options,
                    data: this.data,
                    state: this.state,
                    i18n: l,
                    sharedState: this.state
                }), this._popupLayout.setParentElement(t), this._popupEvents = this._popupLayout.events.group().add("loadmorerequest", this._onLoadMoreRequest, this).add("resultselect", this._onResultSelect, this), this.events.fire("popupcreated"))
            }, _destroyPopupItemLayout: function () {
                if (this._pane) {
                    var e = this._pane.getMap();
                    e.panes.remove(this._pane), e.panes.get("copyrights").getElement().style.display = null, this._pane = null
                }
                this._popupLayout && (this._popupLayout.setParentElement(null), this._popupLayout = null), this._popupEvents && (this._popupEvents.removeAll(), this._popupPromise = null)
            }, _onResultSelect: function (e) {
                this.events.fire("resultselect", {index: e.get("index")})
            }, _onLoadMoreRequest: function () {
                this.events.fire("loadmorerequest")
            }, _updateContent: function () {
                var e = {content: this.state.get("found", "0").toString()}, t = this.state.get("displayMode");
                "full" === t ? (e.content = l.search_button_text.replace("%found%", e.content), e.image = null) : e.image = u.getImage("search-button-icon"), this.data.set(e)
            }
        });
        e(p)
    }), t.modules.define("mf.search.displayModeHelper", ["mf.meta.config"], function (e, t) {
        function o(e, o) {
            var i, s = e.container.getSize(), n = s[0], a = s[1];
            i = n < t.searchMinMapWidth || a < t.searchMinMapHeight ? "hidden" : n >= t.searchBalloonModeWidth ? "full" : "compact", o.set("displayMode", i)
        }

        e(function (e, t) {
            e.events.add("sizechange", function () {
                o(e, t)
            }, this), o(e, t)
        })
    }), t.modules.define("mf.search.inceptionHelper", ["yandex.state.associate"], function (e, t) {
        var o = {
            setSearch: function (e, o) {
                t.get(e).setSearch(o)
            }, resetSearch: function (e) {
                t.get(e).setSearch(e.state.get("mf_defaultYAState", null))
            }, setSearchDefault: function (e, t) {
                e.state.set("mf_defaultYAState", t)
            }
        };
        e(o)
    }), t.modules.define("search-popup-layout.css", ["system.provideCss"], function (e, t) {
        t(".search-popup{font-family:Arial;position:absolute;left:28px;top:43px;z-index:10000;box-shadow:inset 0 0 0 1px rgba(0,0,0,.15),0 8px 30px -5px rgba(0,0,0,.5);background-color:#fff}.search-popup__compact{width:100%;max-height:100%;top:0;left:0}.search-popup__compact .search-popup-header{border-bottom:1px solid #e3e3e3;padding-right:40px}.search-popup__compact .search-popup-inner{width:100%;margin-top:-1px}.search-popup-separator{border-top:1px solid #e5e5e5}.search-popup-close-button{width:26px;height:28px;display:inline-block;border:1px solid #dadada;border-radius:1px;background-image:url(data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHZpZXdCb3g9IjAgMCAyNiAyNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48dGl0bGU+U2xpY2UgMTwvdGl0bGU+PHBhdGggZD0iTTEyIDEzbDEtMSAxIDEgNS41IDUgMS41LTEuNS03LTYuNS0xLTEtMSAxLTcgNi41TDYuNDk3IDE4IDEyIDEzem0wIDAiIGZpbGw9IiM5OTkiIGZpbGwtcnVsZT0iZXZlbm9kZCIvPjwvc3ZnPg==);position:absolute;right:10px;top:5px;cursor:pointer;z-index:101}.search-popup-inner{width:300px;overflow-y:auto;background-color:#fff}.search-popup-inner::-webkit-scrollbar{width:6px;height:13px}.search-popup-inner::-webkit-scrollbar-thumb{min-height:30px;box-shadow:inset 0 0 0 4px rgba(0,0,0,.2)}.search-popup-inner::-webkit-scrollbar-track{background:0 0}.search-popup-tail{position:absolute;left:20px;bottom:100%;margin-left:-17px;z-index:-100;width:17px;height:17px;background:rgba(0,0,0,.15);background:-webkit-linear-gradient(45deg,rgba(0,0,0,.15) 50%,rgba(0,0,0,0) 50%);background:linear-gradient(45deg,rgba(0,0,0,.15) 50%,rgba(0,0,0,0) 50%);font:0/0 a;transform:rotate(135deg);transform-origin:100% 100%}.search-popup-tail:after{content:'';position:absolute;bottom:1px;left:1px;width:17px;height:17px;background-color:#fff}.search-popup a{color:#04b;text-decoration:none}.search-popup a:hover,.search-popup-more:hover{color:#c00}.search-popup-header{background-color:#fff;height:40px;line-height:40px;font-size:12px;padding:0 10px;position:relative;z-index:100;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.search-popup-more{border-top:2px solid #e5e5e5;height:30px;line-height:30px;text-align:center;font-size:14px;cursor:pointer;color:#0043ba;background-color:#fff}.search-popup-footer{border-top:1px solid #e5e5e5;height:76px;font-size:13px;background:#f3f2ee url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+Cjxzdmcgd2lkdGg9IjQ0cHgiIGhlaWdodD0iNDRweCIgdmlld0JveD0iMCAwIDQ0IDQ0IiB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHhtbG5zOnNrZXRjaD0iaHR0cDovL3d3dy5ib2hlbWlhbmNvZGluZy5jb20vc2tldGNoL25zIj4KICAgIDwhLS0gR2VuZXJhdG9yOiBTa2V0Y2ggMy41LjIgKDI1MjM1KSAtIGh0dHA6Ly93d3cuYm9oZW1pYW5jb2RpbmcuY29tL3NrZXRjaCAtLT4KICAgIDx0aXRsZT5NYXBGcmFtZV9ubyBzZWFyY2ggcmVzdWx0c19pY25fZmxhdHRlbjwvdGl0bGU+CiAgICA8ZGVzYz5DcmVhdGVkIHdpdGggU2tldGNoLjwvZGVzYz4KICAgIDxkZWZzPgogICAgICAgIDxjaXJjbGUgaWQ9InBhdGgtMSIgY3g9IjIyIiBjeT0iMjIiIHI9IjIyIj48L2NpcmNsZT4KICAgIDwvZGVmcz4KICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiIHNrZXRjaDp0eXBlPSJNU1BhZ2UiPgogICAgICAgIDxnIGlkPSJNYXBGcmFtZV9uby1zZWFyY2gtcmVzdWx0c19pY25fZmxhdHRlbiIgc2tldGNoOnR5cGU9Ik1TQXJ0Ym9hcmRHcm91cCI+CiAgICAgICAgICAgIDxtYXNrIGlkPSJtYXNrLTIiIHNrZXRjaDpuYW1lPSJNYXNrIiBmaWxsPSJ3aGl0ZSI+CiAgICAgICAgICAgICAgICA8dXNlIHhsaW5rOmhyZWY9IiNwYXRoLTEiPjwvdXNlPgogICAgICAgICAgICA8L21hc2s+CiAgICAgICAgICAgIDx1c2UgaWQ9Ik1hc2siIGZpbGw9IiNGNkYwRDkiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiIHhsaW5rOmhyZWY9IiNwYXRoLTEiPjwvdXNlPgogICAgICAgICAgICA8cGF0aCBkPSJNMS40Njg1MjIzNiwyMyBMNDIuNTMxNDc3NiwyMyBMNDQsMjMgTDQ0LDE5IEw0Mi41MzE0Nzc2LDE5IEwxLjQ2ODUyMjM2LDE5IEwwLDE5IEwwLDIzIEwxLjQ2ODUyMjM2LDIzIEwxLjQ2ODUyMjM2LDIzIFoiIGlkPSJTaGFwZSIgZmlsbD0iI0ZEQ0M4QyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgbWFzaz0idXJsKCNtYXNrLTIpIj48L3BhdGg+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik0xNSwxLjQyNTEwMTIxIEwxNSw0Mi41NzQ4OTg4IEwxNSw0NCBMMTksNDQgTDE5LDQyLjU3NDg5ODggTDE5LDEuNDI1MTAxMjEgTDE5LDIuNTMxNDg4MjllLTE1IEwxNSwwIEwxNSwxLjQyNTEwMTIxIEwxNSwxLjQyNTEwMTIxIFoiIGlkPSJTaGFwZSIgZmlsbD0iI0ZEQ0M4QyIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgbWFzaz0idXJsKCNtYXNrLTIpIj48L3BhdGg+CiAgICAgICAgICAgIDxwYXRoIGQ9Ik02LDMwIEwwLDMwIEwwLDM5IEwxMiwzOSBMMTIsMzMuMSBMMTIsMjUgTDYsMjUgTDYsMzAgTDYsMzAgWiIgaWQ9IlJlY3RhbmdsZS04NDMiIGZpbGw9IiNFQ0UwQzUiIHNrZXRjaDp0eXBlPSJNU1NoYXBlR3JvdXAiIG1hc2s9InVybCgjbWFzay0yKSI+PC9wYXRoPgogICAgICAgICAgICA8cGF0aCBkPSJNMjIsMTUgTDQ0LDE1IEw0NCwtMSBMMjIsLTEgTDIyLDE1IEwyMiwxNSBaIiBpZD0iUmVjdGFuZ2xlLTg0NSIgZmlsbD0iI0VDRTBDNSIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgbWFzaz0idXJsKCNtYXNrLTIpIj48L3BhdGg+CiAgICAgICAgICAgIDxyZWN0IGlkPSJSZWN0YW5nbGUtODQyIiBmaWxsPSIjQ0VFMEMwIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIiBtYXNrPSJ1cmwoI21hc2stMikiIHg9IjMiIHk9IjAiIHdpZHRoPSIxMCIgaGVpZ2h0PSIxOCI+PC9yZWN0PgogICAgICAgICAgICA8cGF0aCBkPSJNMjEsMjUuOTk1MTA5NyBMNDYsMjUuOTk1MTA5NyBMNDYuNzUsNDUgTDIxLjA4MzMzMzMsNDQuNTI5NjE0OSBMMjEsMjUuOTk1MTA5NyBaIiBpZD0iUmVjdGFuZ2xlLTg0MSIgZmlsbD0iI0NFRTBDMCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCIgbWFzaz0idXJsKCNtYXNrLTIpIj48L3BhdGg+CiAgICAgICAgICAgIDxnIGlkPSJtYXBzIiBza2V0Y2g6dHlwZT0iTVNMYXllckdyb3VwIiBtYXNrPSJ1cmwoI21hc2stMikiPgogICAgICAgICAgICAgICAgPGcgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoMjMuMDAwMDAwLCAxMS4wMDAwMDApIiBpZD0iTGF5ZXJfMSI+CiAgICAgICAgICAgICAgICAgICAgPGc+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik03LDE0LjQgTDE0LDcuMiBDMTQsMTIgMTAuNSwxNS42IDQuNjY2NjY2NjcsMjQgTDcsMTQuNCBMNywxNC40IFoiIGlkPSJTaGFwZSIgZmlsbD0iI0NDMDAwMCIgc2tldGNoOnR5cGU9Ik1TU2hhcGVHcm91cCI+PC9wYXRoPgogICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNNywwIEMxMC44NjI5NjMsMCAxNCwzLjIyNjY2NjY3IDE0LDcuMiBDMTQsMTEuMTczMzMzMyAxMC44NjI5NjMsMTQuNCA3LDE0LjQgQzMuMTM3MDM3MDQsMTQuNCAwLDExLjE3MzMzMzMgMCw3LjIgQzAsMy4yMjY2NjY2NyAzLjEzNzAzNzA0LDAgNywwIEw3LDAgWiIgaWQ9IlNoYXBlIiBmaWxsPSIjRUUwMDAwIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgICAgIDxwYXRoIGQ9Ik03LjAwMDAwMDcyLDQuMzIgQzguNTU1NTU2MjQsNC4zMiA5LjgwMDAwMDY3LDUuNTY0NDQ0NDIgOS44MDAwMDA2Nyw3LjExOTk5OTk1IEM5LjgwMDAwMDY3LDguNjc1NTU1NDggOC41NTU1NTYyNCw5LjkxOTk5OTkgNy4wMDAwMDA3Miw5LjkxOTk5OTkgQzUuNDQ0NDQ1MTksOS45MTk5OTk5IDQuMjAwMDAwNzYsOC42NzU1NTU0OCA0LjIwMDAwMDc2LDcuMTE5OTk5OTUgQzQuMjAwMDAwNzYsNS41NjQ0NDQ0MiA1LjQ0NDQ0NTE5LDQuMzIgNy4wMDAwMDA3Miw0LjMyIEw3LjAwMDAwMDcyLDQuMzIgWiIgaWQ9IlNoYXBlIiBmaWxsPSIjRjZGNUYzIiBza2V0Y2g6dHlwZT0iTVNTaGFwZUdyb3VwIj48L3BhdGg+CiAgICAgICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICAgICAgPC9nPgogICAgICAgICAgICA8L2c+CiAgICAgICAgPC9nPgogICAgPC9nPgo8L3N2Zz4=) 14px 14px no-repeat;background-size:44px 44px;padding-left:76px}.search-popup-footer .caption{display:table;line-height:1.4em;height:100%}.search-popup-footer .caption div{display:table-cell;height:auto;vertical-align:middle}", e)
    }), t.modules.define("mf.search.PopupLayout", ["mf.localization", "mf.env", "templateLayoutFactory", "search-popup-layout.ymtpl", "domEvent.manager", "Monitor", "mf.util.ymapsLink", "util.dom.element", "util.dom.style", "util.dom.styleSheet", "theme.islands.control.search.layout.PopupItems", "theme.islands.control.search.layout.PopupItem", "theme.islands.islets.control.search.layout.popupItem.Status", "theme.islands.islets.control.search.layout.Card", "search-popup-layout.css"], function (e, t, o, i, s, n, a, r, l, c) {
        var u = "search-popup-", p = 52, d = 50, h = i.createClass(s, {
            build: function () {
                this.getData().options.set({
                    popupItemLayout: "islands#searchControlPopupItemLayout",
                    popupItemStatusLayout: "islands#islets-searchControlPopupItemStatusLayout",
                    popupAdvertLayout: "islands#islets-searchControlPopupAdvertLayout"
                });
                var e = this.getData().state;
                this._popupState = e.get("popupState"), this._popupState && this._popupState.requestId !== e.get("requestId") && (this._popupState = null), h.superclass.build.apply(this, arguments), this._clickListener = n.group(this.getElement()).add("click", function (e) {
                    e.callMethod("stopPropagation")
                }, this), this._setupHeader(), this._stateMonitor = new a(e), this._stateMonitor.add("found", this._checkLoadMoreButton, this).add("results", function () {
                    this._checkLoadMoreButton(), this._setupPopHeight()
                }, this), this._checkLoadMoreButton(), this._loadMoreEventGroup = n.group(this._findElem("more")).add("click", function () {
                    this.events.fire("loadmorerequest")
                }, this), this._mapEvents = this.getData().control.getMap().container.events.group().add("sizechange", this._setupPopHeight, this), this._setupPopHeight();
                var t = this._findElem("close-button");
                t && (this._closeButtonGroup = n.group(t).add("click", function () {
                    this.getData().control.deselect()
                }, this)), this._updateYmapsLink(), this._innerListener = n.group(this._findElem("inner")).add("scroll", function () {
                    var e = this.getData().state;
                    e.set("popupState", {requestId: e.get("requestId"), scrollTop: this._findElem("inner").scrollTop})
                }, this)
            }, clear: function () {
                this._mapEvents.removeAll(), this._innerListener.removeAll(), this._loadMoreEventGroup.removeAll(), this._clickListener.removeAll(), this._stateMonitor.removeAll(), this._closeButtonGroup && this._closeButtonGroup.removeAll(), h.superclass.clear.apply(this, arguments)
            }, _updateYmapsLink: function () {
                var e = this.getData();
                this._findElem("ymaps-link").setAttribute("href", r.getSearchLink(e.control.getMap(), e.state.get("originRequest", {})))
            }, _checkLoadMoreButton: function () {
                var e = this.getData(), t = e.state, o = e.state.get("found", 10), i = t.get("results", []).length,
                    s = o > i, n = this._findElem("more");
                s && (n.innerText = this._bindMoreText(Math.min(o - i, 10))), n.style.display = s ? "" : "none"
            }, _setupHeader: function () {
                var e = t.search_result.replace("%text%", this.getData().data.get("request").displayText),
                    o = this._findElem("header");
                o.textContent ? o.textContent = e : o.innerText = e
            }, _setupPopHeight: function () {
                var e = this.getData(), t = this._findElem("inner"), o = e.control.getMap();
                if (o) {
                    var i = t.scrollTop || (this._popupState ? this._popupState.scrollTop : 0),
                        s = o.container.getSize()[1];
                    "full" === e.state.get("displayMode") ? t.style.maxHeight = s - p - d + "px" : (t.parentNode.style.height = null, c.getSize(t.parentNode)[1] === s && (t.style.height = "calc(100% - 40px)", t.parentNode.style.height = s + "px")), t.scrollTop = i
                }
            }, _findElem: function (e) {
                return l.find(this.getElement(), "." + u + e)
            }, _bindMoreText: function (e) {
                var t = this.getData().i18n.search_more_button,
                    o = t.match(/(.*?)(%_found_%) (?:\((.*?)\|(.*?)\|(.*?)\))/);
                return [o[1], e, " ", o[e > 4 ? 5 : e < 2 ? 3 : 4]].join("")
            }
        });
        e(h)
    }), t.modules.define("search-popup-layout.ymtpl", [], function (e) {
        e([0, '<div class="search-popup', 2003, "data.get(\"state.displayMode\") !== 'full'", 0, " search-popup__compact", 2005, null, 0, '">\n    ', 2003, "data.get(\"state.displayMode\") !== 'full'", 0, "\n        <div class=search-popup-header></div>\n        <div class=search-popup-close-button></div>\n    ", 2005, null, 0, "\n    <div class=search-popup-inner>\n        ", 2003, "data.get(\"state.displayMode\") === 'full'", 0, "\n            <div class=search-popup-header></div>\n        ", 2005, null, 0, "\n        ", 2003, 'data.get("state.advert") && data.get("options.popupAdvertLayout")', 0, "\n            <div class=search-popup-separator></div>\n            ", 2002, ["options.popupAdvertLayout", []], 0, "\n        ", 2005, null, 0, "\n        ", 2002, ["islands#searchControlPopupItemsLayout", []], 0, "\n        <div class=search-popup-more>\n            ", 2001, ["i18n.search_more_button", [["raw", null]]], 0, "\n        </div>\n        <div class=search-popup-footer>\n            <div class=caption>\n                <div>\n                    ", 2001, ["i18n.search_footer", [["raw", null]]], 0, "\n                </div>\n            </div>\n        </div>\n    </div>\n    ", 2003, "data.get(\"state.displayMode\") !== 'compact'", 0, "\n        <div class=search-popup-tail></div>\n    ", 2005, null, 0, "\n</div>"])
    }), t.modules.define("mf.search.provider", ["mf.hosts", "mf.env", "mf.meta.config", "yandex.searchProvider.storage", "yandex.searchProvider.responseParser", "yandex.timeZone", "util.jsonp", "localization.common.current", "formatter", "util.extend", "vow"], function (e, t, o, i, s, n, a, r, l, c, u, p) {
        var d = l.ppo.Card, h = {business: "biz", toponym: "geo"}, g = {
            search: function (e) {
                var i = p.defer();
                e = u({
                    format: "json",
                    lang: o.apiLocale,
                    token: o.token,
                    results: 20,
                    origin: "mapFrame2Search",
                    snippets: ["businessrating/1.x", "masstransit/1.x"],
                    ask_direct: 1,
                    type: "biz,web,geo"
                }, e);
                var s = {url: t.search + "v2/", requestParams: e};
                return r(s).then(this._addTimeZoneToResponse).then(function (t) {
                    if ("success" !== t.status) return i.reject({message: "Bad response", status: t.status});
                    var o = n.parseResults(t.data, t.timeZone);
                    o.each(function (o, i) {
                        this._prepateItem(o, t.data.features[i], e)
                    }, this), i.resolve({geoObjects: o, responseMetaData: t.data.properties.ResponseMetaData})
                }, function (e) {
                    i.reject(e)
                }, this), i.promise()
            }, _addTimeZoneToResponse: function (e) {
                if (e.data && e.data.features.length) {
                    var t = e.data.features[0], o = t.geometry.coordinates, i = p.defer();
                    return a.get(o, 10).then(function (t) {
                        i.resolve(u(e, {timeZone: {geoPoint: o, offset: t.offset, dst: t.dst}}))
                    }, function () {
                        i.resolve(e)
                    }), i.promise()
                }
                return p.resolve(e)
            }, _prepateItem: function (e, t, o) {
                var s = e.properties.get("type");
                "business" === s && this._setLocalization(e);
                var n = e.properties.get("responseMetaData");
                e.properties.set("requestId", o.business_oid).set("ol", h[s] || "biz").set("clientId", e.properties.get("id") || n && n.id).set("figureGeometry", this._geometryConverter(t.geometries[1])).set("displayAdvert", i.searchShowAdvert), e.options.set({
                    balloonDisplayAdvert: !0,
                    displayAdvert: !0
                })
            }, _geometryConverter: function (e) {
                if (e) {
                    var t = e.type.toLowerCase();
                    if ("multilinestring" === t) return e.coordinates.map(function (e) {
                        return {type: "LineString", coordinates: e}
                    });
                    if ("geometrycollection" === t) return e.geometries
                }
                return null
            }, _setLocalization: function (e) {
                var t = e.properties, o = t.get("rating.reviews", 0), i = t.get("rating.ratings", 0);
                e.properties.set("loc", {
                    timeClosedUntil: d.timeClosedUntil.replace("%s", t.get("workingStatus.time", "")),
                    timeOpenUntil: d.timeOpenUntil.replace("%s", t.get("workingStatus.time", "")),
                    ratingReviews: c.numeral(o, d.ratingReviews),
                    ratingRatings: c.numeral(i, d.ratingRatings)
                })
            }
        };
        e(g)
    }), t.modules.define("mf.search.setupBalloonPane", ["pane.MovablePane"], function (e, t) {
        e(function (e) {
            e.panes.get("mf.balloonPane") || e.panes.append("mf.balloonPane", new t(e, {zIndex: 9999}))
        })
    }), t.modules.define("mf.util.balloonAutoPan", ["util.pixelBounds"], function (e, t) {
        e(function (e, o) {
            var i, s = e.balloon.getOverlaySync().getShape().getBounds(), n = e.container.getSize(),
                a = e.getGlobalPixelCenter(),
                r = [[a[0] - n[0] / 2, a[1] - n[1] / 2], [a[0] + n[0] / 2, a[1] + n[1] / 2]];
            return t.containsBounds(r, s) ? null : (i = n[1] < t.getSize(s)[1] ? [t.getCenter(s)[0], s[1][1] - n[1] / 2] : t.getCenter(s), i[0] += o[0], i[1] += o[1], i)
        })
    }), t.modules.define("mf.controller.createMapContainer", function (e) {
        e(function () {
            var e = document.getElementsByClassName("map-container")[0];
            return e ? e : (e = document.createElement("div"), e.className = "map-container", document.body.appendChild(e), e)
        })
    }), t.modules.define("mf.util.id", [], function (e) {
        var t = 108;
        e({
            get: function () {
                return ++t
            }
        })
    }), t.modules.define("inline-images.css", ["system.provideCss"], function (e, t) {
        t(".search-button-icon{background-image:url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iMjYiIGhlaWdodD0iMjYiIHZpZXdCb3g9IjAgMCAyNiAyNiIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48dGl0bGU+TG91cGU8L3RpdGxlPjxnIGZpbGw9IiM2NjYiIGZpbGwtcnVsZT0iZXZlbm9kZCI+PHBhdGggZD0iTTE0LjkxNCAxNS42MmMyLjM0My0yLjM0MiAyLjM0My02LjE0IDAtOC40ODQtMi4zNDMtMi4zNDMtNi4xNDItMi4zNDMtOC40ODUgMC0yLjM0NCAyLjM0My0yLjM0NCA2LjE0MiAwIDguNDg1IDIuMzQyIDIuMzQ0IDYuMTQgMi4zNDQgOC40ODQgMHptLTEuNzY4LTEuNzY2YzEuMzY3LTEuMzY3IDEuMzY3LTMuNTgzIDAtNC45NS0xLjM2Ni0xLjM2Ny0zLjU4Mi0xLjM2Ny00Ljk1IDAtMS4zNjYgMS4zNjctMS4zNjYgMy41ODMgMCA0Ljk1IDEuMzY4IDEuMzY2IDMuNTg0IDEuMzY2IDQuOTUgMHptMCAwIi8+PHBhdGggZD0iTTEzLjE0NiAxNS45NzVsMi4xMjItMi4xMiA0Ljk1IDQuOTQ4LTIuMTIyIDIuMTIyeiIvPjwvZz48L3N2Zz4=)}", e)
    }), t.modules.define("mf.util.inlineImages", ["inline-images.css"], function (e) {
        function t(e, t, o) {
            for (var i = "undefined" != typeof o ? [o] : document.styleSheets, s = 0, n = i.length; s < n; s++) if (o = i[s], o.cssRules) for (var a = 0, r = o.cssRules.length; a < r; a++) {
                var l = o.cssRules[a];
                if (l.selectorText && l.selectorText.split(",").indexOf(t) !== -1) return l.style[e]
            }
            return null
        }

        e({
            getImage: function (e) {
                var o = t("background-image", "." + e), i = o.match(/(data:image.*?)(?:"|'|\))/);
                return i && i[1] || ""
            }
        })
    }), t.modules.define("mf.util.jsLoader", ["vow"], function (e, t) {
        e(function (e, o) {
            var i = t.defer(), s = document.getElementsByTagName("head")[0], n = document.createElement("script"),
                a = function () {
                    i.resolve(n), s.removeChild(n)
                };
            return n.charset = "utf-8", n.src = e, o && (n.defer = "defer"), s.insertBefore(n, s.firstChild), n.onreadystatechange = function () {
                "complete" === this.readyState || "loaded" === this.readyState ? i.resolve(n) : i.reject()
            }, n.onload = a, n.src = e, i.promise()
        })
    }), t.modules.define("mf.util.mapPoiInteractivityObserver", ["mf.util.mapSizeData"], function (e, t) {
        function o(e, o) {
            var i = t.isSmall(o);
            i !== e.options.get("yandexMapDisablePoiInteractivity") && e.options.set({yandexMapDisablePoiInteractivity: i})
        }

        e(function (e) {
            e.events.add("sizechange", function (t) {
                o(e, t.get("newSize"))
            }, this), o(e, e.container.getSize())
        })
    }), t.modules.define("mf.util.mapSizeData", ["mf.meta.config"], function (e, t) {
        e({
            isSmall: function (e) {
                return e[0] < t.poiInteractivityMinMapWidth || e[1] < t.poiInteractivityMinMapHeight
            }
        })
    }), t.modules.define("mf.util.parseParams", function (e) {
        e(function (e) {
            var t = e.split("&"), o = {};
            return t.forEach(function (e) {
                var t = e.split("=");
                o[decodeURIComponent(t.shift())] = decodeURIComponent(t.join("="))
            }), o
        })
    }), t.modules.define("mf.util.yametrika", ["mf.util.jsLoader", "mf.env"], function (e, t, o) {
        function i(e) {
            return new Ya.Metrika({id: e, trackLinks: !0, accurateTrackBounce: !0})
        }

        var s = [];
        o.yametrika && o.yametrika.id && (window.yandex_metrika_callbacks = [function () {
            o.yametrika.id.map(function (e) {
                return s.push(i(e)), !0
            })
        }], t("https://mc.yandex.ru/metrika/watch.js", !0)), e({
            reachGoal: function (e, t) {
                s.forEach(function (o) {
                    o.reachGoal(e, t)
                })
            }, params: function (e) {
                s.forEach(function (t) {
                    t.params(e)
                })
            }
        })
    }), t.modules.define("mf.util.ymapsLink", ["mf.hosts", "util.bounds", "util.extend"], function (e, t, o, i) {
        e({
            getStateLink: function (e, o) {
                var s = {ll: e.getCenter().join(","), z: e.getZoom(), from: "mapframe"};
                o = o || {}, o.sll && (s.sll = s.ll), s = i({}, o, s);
                var n = [];
                for (var a in s) s.hasOwnProperty(a) && n.push(encodeURIComponent(a) + "=" + encodeURIComponent(s[a]));
                return t.maps + "?" + n.join("&")
            }, getPlacemarkLink: function (e) {
                var o = e.properties, i = o.get("type"), s = e.geometry.getCoordinates().join(","),
                    n = [t.maps, "?ll=" + s, "&from=mapframe"];
                return "toponym" === i ? n.push("&text=" + encodeURIComponent(o.get("address"))) : "business" === i && n.push("&ol=biz&oid=" + o.get("id")), n.join("")
            }, getSearchLink: function (e, i) {
                var s = o.toCenterAndSpan(e.getBounds(), e.options.get("projection"));
                i = i || {};
                var n = [t.maps, "?ll=" + s.ll, "&spn=" + s.spn, "&from=mapframe"];
                return (i.displayText || i.text) && n.push("&text=" + encodeURIComponent(i.displayText || i.text)), i.ctx && n.push("&sctx=" + encodeURIComponent(i.ctx)), n.join("")
            }
        })
    })
}(this);