<?php

function wpgsv__json() {
    global $wpgsv;
    $wpgsv__options = $wpgsv->wpgsv__options();

    $json = [
        "@context" => "http://schema.org",
        "@type" => "LocalBusiness",
    ];

    if (isset($wpgsv__options['site_image'])) {
        $json["image"] = $wpgsv__options['site_image'];
    }

    if (isset($wpgsv__options['price_range'])) {
        $json["priceRange"] = $wpgsv__options['price_range'];
    }

    if (isset($wpgsv__options['telephone'])) {
        $json["telephone"] = $wpgsv__options['telephone'];
    }

    if (isset($wpgsv__options['org_name'])) {
        $json["name"] = $wpgsv__options['org_name'];
    }

    if (isset($wpgsv__options['site_image'])) {
        $json["logo"] = $wpgsv__options['site_image'];
    }

    if (isset($wpgsv__options['description'])) {
        $json["description"] = $wpgsv__options['description'];
    }

    if (isset($wpgsv__options['operation_hours'])) {
        $json["openingHours"] = $wpgsv__options['operation_hours'];
    }

    if (isset($wpgsv__options['latitude']) && isset($wpgsv__options['longitude'])) {
        $json["geo"] = [
            "@type" => "GeoCoordinates",
            "latitude" => $wpgsv__options['latitude'],
            "longitude" => $wpgsv__options['longitude']
        ];
    }

    if (isset($wpgsv__options['website_url'])) {
        $json["url"] = $wpgsv__options['website_url'];
    }

    if (isset($wpgsv__options['telephone'])) {
        $json["contactPoint"] = [
            "@type" => "ContactPoint",
            "telephone" => $wpgsv__options['telephone'],
            "contactType" => "customer service",
            "areaServed" => [
                $wpgsv__options['region']
            ]
        ];
    }

    if (
        isset($wpgsv__options['country']) &&
        isset($wpgsv__options['city']) &&
        isset($wpgsv__options['region']) &&
        isset($wpgsv__options['postal_code']) &&
        isset($wpgsv__options['street_address'])
    ) {
        $json["address"] = [
            "@type" => "PostalAddress",
            "addressCountry" => $wpgsv__options['country'],
            "addressLocality" => $wpgsv__options['city'],
            "addressRegion" => $wpgsv__options['region'],
            "postalCode" => $wpgsv__options['postal_code'],
            "streetAddress" => $wpgsv__options['street_address']
        ];
    }

    $output = "<!-- WP Google Street View - Local Business Schema --!>\n<script type='application/ld+json' class='wp-google-street-view'>\n".json_encode($json)."\n</script>\n<!-- End WP Google Street View - Local Business Schema --!>\n";

    if (
        isset($wpgsv__options['homepage']) && 
        !empty($wpgsv__options['homepage']) && 
        is_front_page()
    ) {
        echo $output;
    } elseif (
        empty($wpgsv__options['homepage']) && 
        isset($wpgsv__options['selected_page']) && 
        !empty($wpgsv__options['selected_page']) &&
        is_page($wpgsv__options['selected_page'])
    ) {
        echo $output;
    } else {
        return;
    }
}

add_action ('wp_head','wpgsv__json');