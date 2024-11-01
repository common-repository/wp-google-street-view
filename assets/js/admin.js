// console.log(meta);

if (typeof meta !== "undefined") {
  let showMap = meta.address || (meta.lat && meta.lng) ? true : false;

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
      {
        featureType: "water",
        elementType: "all",
        stylers: [{ lightness: -20 }],
      },
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
        stylers: [
          { visibility: "on" },
          { color: "#ffffff" },
          { lightness: 16 },
        ],
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
        stylers: [
          { visibility: "on" },
          { color: "#000000" },
          { lightness: 16 },
        ],
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
  };

  let defaultCustomContent =
    '<h3>Lorem Ipsum Heading 😋</h3><p style="text-align: left;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean nec porttitor justo. Etiam posuere ligula id dui fringilla cursus.</p><a href="#" style="display: block; color: #fff; background-color: #007cba; font-size: 16px; padding: 10px 20px; border-radius: 3px; margin-top: 10px; text-align: center; text-decoration: none;">Click here for more details</a>';

  new Vue({
    el: "#wpgsv-metabox",
    data: {
      api: meta.api ? meta.api : "",
      type: meta.type ? meta.type : "street",
      map: showMap,
      address: meta.address
        ? meta.address
        : "240 Broadway, New York, NY 10007, USA",
      lat: meta.lat ? +meta.lat : null,
      lng: meta.lng ? +meta.lng : null,
      zoom: meta.zoom ? +meta.zoom : 15,
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
        meta.infoBox && meta.address
          ? meta.infoBox === "true"
            ? true
            : false
          : true,
      openByDefault:
        meta.openByDefault && meta.address
          ? meta.openByDefault === "true"
            ? true
            : false
          : true,
      markerIcon: meta.markerIcon ? meta.markerIcon : "",
      infoBoxOpen: meta.infoBoxOpen ? meta.infoBoxOpen : "click",
      customInfoBox: meta.customInfoBox
        ? meta.customInfoBox === "true"
          ? true
          : false
        : false,
      setInfoBoxMaxWidth: meta.setInfoBoxMaxWidth
        ? meta.setInfoBoxMaxWidth === "true"
          ? true
          : false
        : false,
      infoBoxMaxWidth:
        meta.setInfoBoxMaxWidth === "true" && meta.infoBoxMaxWidth
          ? meta.infoBoxMaxWidth
          : 350,
      infoBoxContent: meta.infoBoxContent
        ? meta.infoBoxContent
        : defaultCustomContent,
      bicycleLayer: meta.bicycleLayer
        ? meta.bicycleLayer === "true"
          ? true
          : false
        : false,
      trafficLayer: meta.trafficLayer
        ? meta.trafficLayer === "true"
          ? true
          : false
        : false,
      transportLayer: meta.transportLayer
        ? meta.transportLayer === "true"
          ? true
          : false
        : false,
      map_style: map_styles,
      style: meta.map_style ? meta.map_style : "default",
      customStyle: meta.customStyle ? meta.customStyle : "",
      spinner: false,
      mapWidth: meta.mapWidth ? meta.mapWidth : "100%",
      mapHeight: meta.mapHeight ? meta.mapHeight : "450",
      pano: {
        heading: meta.panoheading ? +meta.panoheading : 0,
        pitch: meta.panopitch ? +meta.panopitch : 0,
        zoom: meta.panozoom ? +meta.panozoom : 0,
        position: meta.position ? +meta.position : 0,
      },
      error: "",
    },
    methods: {
      locatorButtonPressed(e) {
        e.preventDefault();

        this.spinner = true;

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(
            position => {
              this.lat = position.coords.latitude;
              this.lng = position.coords.longitude;

              this.getAddressFrom(this.lat, this.lng);

              this.spinner = false;
            },
            error => {
              this.error =
                "Locator unable to find the address. Please type your address manually";
              this.spinner = false;
            }
          );
        } else {
          this.error = "Your browser doesn't support geolocation API";
        }
      },
      async getAddressFrom(lat, lng) {
        await axios
          .get(
            `https://maps.googleapis.com/maps/api/geocode/json?latlng=${lat},${lng}&key=${this.api}`
          )
          .then(response => {
            if (response.data.error_message) {
              this.error = response.data.error_message;
            } else {
              this.address = response.data.results[0].formatted_address;
              this.formattedAddress =
                response.data.results[0].formatted_address;

              this.error = "";

              this.renderMap(+lat, +lng);
            }
          })
          .catch(error => {
            this.error = error.message;
          });
      },
      getLatLngFrom(address) {
        axios
          .get(
            `https://maps.googleapis.com/maps/api/geocode/json?address=${address}&key=${this.api}`
          )
          .then(response => {
            if (response.data.error_message) {
              this.error = response.data.error_message;
            } else {
              this.formattedAddress =
                response.data.results[0].formatted_address;

              let location = response.data.results[0].geometry.location;

              this.lat = location.lat;
              this.lng = location.lng;
              this.renderMap(this.lat, this.lng);
            }
          })
          .catch(error => {
            console.log(error);
            this.error =
              "Error for getting latitude/longitude from address. Code: " +
              error;
          });
      },

      getLocation() {
        if (this.address) {
          this.getLatLngFrom(this.address);
          this.error = "";
        } else if (this.lat && this.lng) {
          this.getAddressFrom(this.lat, this.lng);
          this.error = "";
        } else {
          this.error =
            "Please enter an address or latitude and longitude coordinates";
        }
      },

      renderMap(lat, lng) {
        this.map = true;

        let style = [];

        if (this.style == "default") {
          style = "";
        } else if (this.style == "wy") {
          style = this.map_style.wy;
        } else if (this.style == "modest") {
          style = this.map_style.modest;
        } else if (this.style == "ultralight") {
          style = this.map_style.ultralight;
        } else if (this.style == "shadesgrey") {
          style = this.map_style.shadesgrey;
        } else if (this.style == "custom") {
          if (this.customStyle) {
            try {
              style = JSON.parse(this.customStyle);
            } catch (error) {
              this.error = "Error: Custom Style not applied. Code: " + error;
              console.log(error);
            }
          }
        }

        let coords = { lat: lat, lng: lng };

        var map;
        var pano;

        if (this.type === "streetmap") {
          map = new google.maps.Map(document.getElementById("wpgsv-map"), {
            center: coords,
            zoom: +this.zoom,
            styles: style,
          });

          pano = new google.maps.StreetViewPanorama(
            document.getElementById("wpgsv-pano"),
            {
              position: coords,
              pov: { heading: +this.pano.heading, pitch: +this.pano.pitch },
              zoom: this.pano.zoom,
            }
          );

          this.map_listeners(pano);

          map.setStreetView(pano);
        } else if (this.type === "map") {
          map = new google.maps.Map(document.getElementById("wpgsv-map"), {
            center: coords,
            zoom: +this.zoom,
            styles: style,
          });
        } else if (this.type === "street") {
          pano = new google.maps.StreetViewPanorama(
            document.getElementById("wpgsv-pano"),
            {
              position: coords,
              pov: { heading: +this.pano.heading, pitch: +this.pano.pitch },
              zoom: this.pano.zoom,
            }
          );

          this.map_listeners(pano);
        }

        if (this.marker) {
          let animation = "";

          if (this.animation == "drop") {
            animation = google.maps.Animation.DROP;
          } else if (this.animation == "bounce") {
            animation = google.maps.Animation.BOUNCE;
          }

          let marker = new google.maps.Marker({
            position: {
              lat: lat,
              lng: lng,
            },
            icon: this.markerIcon,
            animation: animation,
            map,
          });

          let content = this.address;
          if (this.customInfoBox) {
            content = this.infoBoxContent;
          }

          let maxWidth = null;
          if (this.setInfoBoxMaxWidth) {
            maxWidth = this.infoBoxMaxWidth;
          }

          if (this.infoBox) {
            const infoWindow = new google.maps.InfoWindow({
              content: content,
              maxWidth: maxWidth,
            });

            marker.addListener(this.infoBoxOpen, () => {
              infoWindow.open(map, marker);
            });

            if (this.openByDefault) {
              infoWindow.open(map, marker);
            }
          }

          if (this.bicycleLayer) {
            const bikeLayer = new google.maps.BicyclingLayer();
            bikeLayer.setMap(map);
          }

          if (this.trafficLayer) {
            const trafficLayer = new google.maps.TrafficLayer();
            trafficLayer.setMap(map);
          }

          if (this.transportLayer) {
            const transitLayer = new google.maps.TransitLayer();
            transitLayer.setMap(map);
          }
        }
      },
      uploadMarker() {
        if (typeof wp !== "undefined" && wp.media && wp.media.editor) {
          wp.media.editor.send.attachment = (props, attachment) => {
            this.markerIcon = wp.media.attachment(attachment.id).get("url");
          };

          wp.media.editor.open();
          return false;
        }
      },
      map_listeners(pano) {
        pano.addListener("position_changed", () => {
          this.pano.position = pano.getPosition();
          this.lat = this.pano.position.lat();
          this.lng = this.pano.position.lng();
          console.log(this.pano.position.lat());
        });

        pano.addListener("pov_changed", () => {
          this.pano.heading = +pano.getPov().heading;
          this.pano.pitch = +pano.getPov().pitch;
        });

        pano.addListener("zoom_changed", () => {
          this.pano.zoom = +pano.getZoom();
        });
      },
    },
    mounted() {
      let autocomplete = new google.maps.places.Autocomplete(
        document.getElementById("wpgsv-address")
      );

      google.maps.event.addListener(autocomplete, "place_changed", () => {
        let place = autocomplete.getPlace();
        this.address = place.formatted_address;
        this.getLatLngFrom(this.address);
        this.error = "";
      });

      if (this.lat && this.lng) {
        this.renderMap(this.lat, this.lng);
      } else if (this.address) {
        this.getLocation();
      }
    },
  });
}

/*****************************************
                  TABS
*****************************************/
jQuery(function ($) {
  jQuery("#fs_connect button[type=submit]").on("click", function (e) {
    window.open(
      "https://better-robots.com/subscribe.php?plugin=wp-google-street-view",
      "wp-google-street-view",
      "resizable,height=400,width=700"
    );
  });

  $(".wpgsv-tabs ul.tabs li").click(function () {
    var tab_id = $(this).attr("data-tab");

    $("ul.tabs li").removeClass("current");
    $(".tab-content").removeClass("current");

    $(this).addClass("current");
    $("#" + tab_id).addClass("current");
  });

  // if ($('.wpgsv-marker_url').length > 0) {

  //     if ( typeof wp !== 'undefined' && wp.media && wp.media.editor) {

  //         $('.wpgsv-marker_url').on('click', function(e) {
  //             e.preventDefault();
  //             var button = $(this);

  //             wp.media.editor.send.attachment = function(props, attachment) {
  //                 // pass image value to input field
  //                 let image = wp.media.attachment(attachment.id).get("url");
  //                 $('#wpgsv-markerIcon').val(image);
  //             }
  //             wp.media.editor.open(button);
  //             return false;
  //         })
  //     }
  // }

  if ($(".wpgsv-site_image").length > 0) {
    if (typeof wp !== "undefined" && wp.media && wp.media.editor) {
      $(".wpgsv-site_image").on("click", function (e) {
        e.preventDefault();

        var button = $(this);

        wp.media.editor.send.attachment = function (props, attachment) {
          // pass thumbnail value to hidden input field
          var thumbnail = wp.media.attachment(attachment.id).attributes.sizes
            .thumbnail
            ? wp.media.attachment(attachment.id).attributes.sizes.thumbnail.url
            : wp.media.attachment(attachment.id).get("url");
          $("#wpgsv-site_image_thumbnail").val(thumbnail);

          // pass image value to input field
          let image = wp.media.attachment(attachment.id).get("url");
          $("#wpgsv-site_image").val(image);

          // if image value exists then set html for image preview
          if (!image == "") {
            $(".wpgsv-image").html(
              `<div class="wpgsv-image-preview"><button class="wpgsv-remove">X</button><img src="${thumbnail}" /></div>`
            );
          }
        };
        wp.media.editor.open(button);
        return false;
      });
    }

    var thumbnailCheck = $("#wpgsv-site_image_thumbnail").val();
    var siteImageCheck = $("#wpgsv-site_image").val();

    if (thumbnailCheck) {
      $(".wpgsv-image").html(
        `<div class="wpgsv-image-preview"><button class="wpgsv-remove">X</button><img src="${thumbnailCheck}" /></div>`
      );
    } else if (siteImageCheck) {
      $(".wpgsv-image").html(
        `<div class="wpgsv-image-preview"><button class="wpgsv-remove">X</button><img src="${siteImageCheck}" /></div>`
      );
    }

    // remove image preview and set input fields value empty
    $(".wpgsv-remove").on("click", function (e) {
      e.preventDefault();
      var deleteConfirm = confirm("Do you want to remove this image?");
      if (deleteConfirm == true) {
        $(".wpgsv-image-preview").remove();
        $("#wpgsv-site_image").val("");
        $("#wpgsv-site_image_thumbnail").val("");
      }
    });
  }
});
