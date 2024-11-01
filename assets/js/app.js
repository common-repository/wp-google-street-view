let map_styles = {
  wy: [
    {
      featureType: "all",
      elementType: "geometry.fill",
      stylers: [{ weight: "2.00" }],
    },
    {
      featureType: "all",
      elementType: "geometry.stroke",
      stylers: [{ color: "#9c9c9c" }],
    },
    {
      featureType: "all",
      elementType: "labels.text",
      stylers: [{ visibility: "on" }],
    },
    {
      featureType: "landscape",
      elementType: "all",
      stylers: [{ color: "#f2f2f2" }],
    },
    {
      featureType: "landscape",
      elementType: "geometry.fill",
      stylers: [{ color: "#ffffff" }],
    },
    {
      featureType: "landscape.man_made",
      elementType: "geometry.fill",
      stylers: [{ color: "#ffffff" }],
    },
    {
      featureType: "poi",
      elementType: "all",
      stylers: [{ visibility: "off" }],
    },
    {
      featureType: "road",
      elementType: "all",
      stylers: [{ saturation: -100 }, { lightness: 45 }],
    },
    {
      featureType: "road",
      elementType: "geometry.fill",
      stylers: [{ color: "#eeeeee" }],
    },
    {
      featureType: "road",
      elementType: "labels.text.fill",
      stylers: [{ color: "#7b7b7b" }],
    },
    {
      featureType: "road",
      elementType: "labels.text.stroke",
      stylers: [{ color: "#ffffff" }],
    },
    {
      featureType: "road.highway",
      elementType: "all",
      stylers: [{ visibility: "simplified" }],
    },
    {
      featureType: "road.arterial",
      elementType: "labels.icon",
      stylers: [{ visibility: "off" }],
    },
    {
      featureType: "transit",
      elementType: "all",
      stylers: [{ visibility: "off" }],
    },
    {
      featureType: "water",
      elementType: "all",
      stylers: [{ color: "#46bcec" }, { visibility: "on" }],
    },
    {
      featureType: "water",
      elementType: "geometry.fill",
      stylers: [{ color: "#c8d7d4" }],
    },
    {
      featureType: "water",
      elementType: "labels.text.fill",
      stylers: [{ color: "#070707" }],
    },
    {
      featureType: "water",
      elementType: "labels.text.stroke",
      stylers: [{ color: "#ffffff" }],
    },
  ],
  modest: [
    {
      featureType: "all",
      elementType: "geometry",
      stylers: [{ color: "#202c3e" }],
    },
    {
      featureType: "all",
      elementType: "labels.text.fill",
      stylers: [
        { gamma: 0.01 },
        { lightness: 20 },
        { weight: "1.39" },
        { color: "#ffffff" },
      ],
    },
    {
      featureType: "all",
      elementType: "labels.text.stroke",
      stylers: [
        { weight: "0.96" },
        { saturation: "9" },
        { visibility: "on" },
        { color: "#000000" },
      ],
    },
    {
      featureType: "all",
      elementType: "labels.icon",
      stylers: [{ visibility: "off" }],
    },
    {
      featureType: "landscape",
      elementType: "geometry",
      stylers: [{ lightness: 30 }, { saturation: "9" }, { color: "#29446b" }],
    },
    {
      featureType: "poi",
      elementType: "geometry",
      stylers: [{ saturation: 20 }],
    },
    {
      featureType: "poi.park",
      elementType: "geometry",
      stylers: [{ lightness: 20 }, { saturation: -20 }],
    },
    {
      featureType: "road",
      elementType: "geometry",
      stylers: [{ lightness: 10 }, { saturation: -30 }],
    },
    {
      featureType: "road",
      elementType: "geometry.fill",
      stylers: [{ color: "#193a55" }],
    },
    {
      featureType: "road",
      elementType: "geometry.stroke",
      stylers: [{ saturation: 25 }, { lightness: 25 }, { weight: "0.01" }],
    },
    { featureType: "water", elementType: "all", stylers: [{ lightness: -20 }] },
  ],
  ultralight: [
    {
      featureType: "water",
      elementType: "geometry",
      stylers: [{ color: "#e9e9e9" }, { lightness: 17 }],
    },
    {
      featureType: "landscape",
      elementType: "geometry",
      stylers: [{ color: "#f5f5f5" }, { lightness: 20 }],
    },
    {
      featureType: "road.highway",
      elementType: "geometry.fill",
      stylers: [{ color: "#ffffff" }, { lightness: 17 }],
    },
    {
      featureType: "road.highway",
      elementType: "geometry.stroke",
      stylers: [{ color: "#ffffff" }, { lightness: 29 }, { weight: 0.2 }],
    },
    {
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [{ color: "#ffffff" }, { lightness: 18 }],
    },
    {
      featureType: "road.local",
      elementType: "geometry",
      stylers: [{ color: "#ffffff" }, { lightness: 16 }],
    },
    {
      featureType: "poi",
      elementType: "geometry",
      stylers: [{ color: "#f5f5f5" }, { lightness: 21 }],
    },
    {
      featureType: "poi.park",
      elementType: "geometry",
      stylers: [{ color: "#dedede" }, { lightness: 21 }],
    },
    {
      elementType: "labels.text.stroke",
      stylers: [{ visibility: "on" }, { color: "#ffffff" }, { lightness: 16 }],
    },
    {
      elementType: "labels.text.fill",
      stylers: [{ saturation: 36 }, { color: "#333333" }, { lightness: 40 }],
    },
    { elementType: "labels.icon", stylers: [{ visibility: "off" }] },
    {
      featureType: "transit",
      elementType: "geometry",
      stylers: [{ color: "#f2f2f2" }, { lightness: 19 }],
    },
    {
      featureType: "administrative",
      elementType: "geometry.fill",
      stylers: [{ color: "#fefefe" }, { lightness: 20 }],
    },
    {
      featureType: "administrative",
      elementType: "geometry.stroke",
      stylers: [{ color: "#fefefe" }, { lightness: 17 }, { weight: 1.2 }],
    },
  ],
  shadesgrey: [
    {
      featureType: "all",
      elementType: "labels.text.fill",
      stylers: [{ saturation: 36 }, { color: "#000000" }, { lightness: 40 }],
    },
    {
      featureType: "all",
      elementType: "labels.text.stroke",
      stylers: [{ visibility: "on" }, { color: "#000000" }, { lightness: 16 }],
    },
    {
      featureType: "all",
      elementType: "labels.icon",
      stylers: [{ visibility: "off" }],
    },
    {
      featureType: "administrative",
      elementType: "geometry.fill",
      stylers: [{ color: "#000000" }, { lightness: 20 }],
    },
    {
      featureType: "administrative",
      elementType: "geometry.stroke",
      stylers: [{ color: "#000000" }, { lightness: 17 }, { weight: 1.2 }],
    },
    {
      featureType: "landscape",
      elementType: "geometry",
      stylers: [{ color: "#000000" }, { lightness: 20 }],
    },
    {
      featureType: "poi",
      elementType: "geometry",
      stylers: [{ color: "#000000" }, { lightness: 21 }],
    },
    {
      featureType: "road.highway",
      elementType: "geometry.fill",
      stylers: [{ color: "#000000" }, { lightness: 17 }],
    },
    {
      featureType: "road.highway",
      elementType: "geometry.stroke",
      stylers: [{ color: "#000000" }, { lightness: 29 }, { weight: 0.2 }],
    },
    {
      featureType: "road.arterial",
      elementType: "geometry",
      stylers: [{ color: "#000000" }, { lightness: 18 }],
    },
    {
      featureType: "road.local",
      elementType: "geometry",
      stylers: [{ color: "#000000" }, { lightness: 16 }],
    },
    {
      featureType: "transit",
      elementType: "geometry",
      stylers: [{ color: "#000000" }, { lightness: 19 }],
    },
    {
      featureType: "water",
      elementType: "geometry",
      stylers: [{ color: "#000000" }, { lightness: 17 }],
    },
  ],
}

let defaultCustomContent =
  '<h3>Lorem Ipsum Heading 😋</h3><p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec porttitor justo. Etiam posuere ligula id dui fringilla cursus.</p><a href="#" style="display: block; color: #fff; background-color: #007cba; font-size: 16px; padding: 10px 20px; border-radius: 3px; margin-top: 10px; text-align: center; text-decoration: none;">Click here for more details</a>'

var shortcodes = document.querySelectorAll(".wpgsv-app")

shortcodes.forEach(shortcode => {
  meta = {}
  for (let attr of shortcode.attributes) {
    // replace data- from all attributes names
    let name = attr.name.replace("data-", "")
    meta[name] = attr.value
  }

  console.log(meta)

  new Vue({
    el: "#" + meta.id,
    data: {
      type: meta.type ? meta.type : "street",
      address: meta.address ? meta.address : "",
      lat: meta.lat ? +meta.lat : null,
      lng: meta.lng ? +meta.lng : null,
      zoom: meta.zoom ? +meta.zoom : 12,
      animation: meta.animation ? meta.animation : "drop",
      color: "",
      formattedAddress: "",
      marker:
        meta.marker && meta.address
          ? meta.marker === "true"
            ? true
            : false
          : true,
      infoBox:
        meta.infobox && meta.address
          ? meta.infobox === "true"
            ? true
            : false
          : true,
      openByDefault:
        meta.openbydefault && meta.address
          ? meta.openbydefault === "true"
            ? true
            : false
          : true,
      markerIcon: meta.markericon ? meta.markericon : "",
      infoBoxOpen: meta.infoboxopen ? meta.infoboxopen : "click",
      customInfoBox: meta.custominfobox
        ? meta.custominfobox === "true"
          ? true
          : false
        : false,
      setInfoBoxMaxWidth: meta.setinfoboxmaxwidth
        ? meta.setinfoboxmaxwidth === "true"
          ? true
          : false
        : false,
      infoBoxMaxWidth:
        meta.setInfoBoxMaxWidth === "true" && meta.infoBoxMaxWidth
          ? meta.infoBoxMaxWidth
          : 350,
      infoBoxContent: meta.infoboxcontent
        ? meta.infoboxcontent
        : defaultCustomContent,
      bicycleLayer: meta.bicyclelayer
        ? meta.bicyclelayer === "true"
          ? true
          : false
        : false,
      trafficLayer: meta.trafficlayer
        ? meta.trafficlayer === "true"
          ? true
          : false
        : false,
      transportLayer: meta.transportlayer
        ? meta.transportlayer === "true"
          ? true
          : false
        : false,
      map_style: map_styles,
      style: meta.map_style ? meta.map_style : "default",
      customStyle: meta.customstyle ? meta.customstyle : "",
      spinner: false,
      mapWidth: meta.mapwidth ? meta.mapwidth : "100%",
      mapHeight: meta.mapheight ? meta.mapheight : "450",
      pano: {
        heading: meta.panoheading ? +meta.panoheading : 0,
        pitch: meta.panopitch ? +meta.panopitch : 0,
        zoom: meta.panozoom ? +meta.panozoom : 0,
      },
      error: "",
    },
    methods: {
      renderMap(lat, lng) {
        this.map = true

        let style = []

        if (this.style == "default") {
          style = ""
        } else if (this.style == "wy") {
          style = this.map_style.wy
        } else if (this.style == "modest") {
          style = this.map_style.modest
        } else if (this.style == "ultralight") {
          style = this.map_style.ultralight
        } else if (this.style == "shadesgrey") {
          style = this.map_style.shadesgrey
        } else if (this.style == "custom") {
          if (this.customStyle) {
            try {
              style = JSON.parse(this.customStyle)
            } catch (error) {
              console.log(error)
            }
          }
        }

        let coords = { lat: lat, lng: lng }

        var map
        var pano

        if (this.type === "streetmap") {
          map = new google.maps.Map(
            document.getElementById("wpgsv-map-" + meta.id),
            {
              center: coords,
              zoom: +this.zoom,
              styles: style,
            }
          )

          pano = new google.maps.StreetViewPanorama(
            document.getElementById("wpgsv-pano-" + meta.id),
            {
              position: coords,
              pov: { heading: +this.pano.heading, pitch: +this.pano.pitch },
              zoom: this.pano.zoom,
            }
          )

          pano.addListener("pov_changed", () => {
            this.pano.heading = +pano.getPov().heading
            this.pano.pitch = +pano.getPov().pitch
          })

          pano.addListener("zoom_changed", () => {
            this.pano.zoom = +pano.getZoom()
          })

          map.setStreetView(pano)
        } else if (this.type === "map") {
          map = new google.maps.Map(
            document.getElementById("wpgsv-map-" + meta.id),
            {
              center: coords,
              zoom: +this.zoom,
              styles: style,
            }
          )
        } else if (this.type === "street") {
          pano = new google.maps.StreetViewPanorama(
            document.getElementById("wpgsv-pano-" + meta.id),
            {
              position: coords,
              pov: { heading: +this.pano.heading, pitch: +this.pano.pitch },
              zoom: this.pano.zoom,
            }
          )

          pano.addListener("pov_changed", () => {
            this.pano.heading = +pano.getPov().heading
            this.pano.pitch = +pano.getPov().pitch
          })

          pano.addListener("zoom_changed", () => {
            this.pano.zoom = +pano.getZoom()
          })
        }

        if (this.marker) {
          let animation = ""

          if (this.animation == "drop") {
            animation = google.maps.Animation.DROP
          } else if (this.animation == "bounce") {
            animation = google.maps.Animation.BOUNCE
          }

          let marker = new google.maps.Marker({
            position: {
              lat: lat,
              lng: lng,
            },
            icon: this.markerIcon,
            animation: animation,
            map,
          })

          let content = this.address
          if (this.customInfoBox) {
            content = this.infoBoxContent
          }

          let maxWidth = null
          if (this.setInfoBoxMaxWidth) {
            maxWidth = this.infoBoxMaxWidth
          }

          if (content && this.infoBox) {
            const infoWindow = new google.maps.InfoWindow({
              content: content,
              maxWidth: maxWidth,
            })

            marker.addListener(this.infoBoxOpen, () => {
              infoWindow.open(map, marker)
            })

            if (this.openByDefault) {
              infoWindow.open(map, marker)
            }
          }

          if (this.bicycleLayer) {
            const bikeLayer = new google.maps.BicyclingLayer()
            bikeLayer.setMap(map)
          }

          if (this.trafficLayer) {
            const trafficLayer = new google.maps.TrafficLayer()
            trafficLayer.setMap(map)
          }

          if (this.transportLayer) {
            const transitLayer = new google.maps.TransitLayer()
            transitLayer.setMap(map)
          }
        }
      },
    },
    mounted() {
      this.renderMap(this.lat, this.lng)
    },
  })
})
