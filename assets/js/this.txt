var regions=[
    {
        "region_name": "Canlubang",
        "region_code": "can",
    },
    {
        "region_name": "Mapagong",
        "region_code": "map",
    },
    {
        "region_name": "San Cristobal",
        "region_code": "San_Cristobal",
    },
    {
        "region_name": "Banlic",
        "region_code": "Banlic",
    },
    {
        "region_name": "Uwisan",
        "region_code": "Uwisan",
    },
    {
        "region_name": "Looc",
        "region_code": "Looc",
    },
    {
        "region_name": "Sampiruhan",
        "region_code": "Sampiruhan",
    },
    {
        "region_name": "Palingon",
        "region_code": "Palingon",
    },
    {
        "region_name": "Lingga",
        "region_code": "Lingga",
    },
    {
        "region_name": "San_Juan",
        "region_code": "San_Juan",
    },
    {
        "region_name": "Banadero",
        "region_code": "Banadero",
    },
    {
        "region_name": "San_Jose",
        "region_code": "San_Jose",
    },
    {
        "region_name": "Poblacion",
        "region_code": "Poblacion",
    },
    {
        "region_name": "Parian",
        "region_code": "Parian",
    },
    {
        "region_name": "Paciano",
        "region_code": "Paciano",
    },
    {
        "region_name": "Mayapa",
        "region_code": "Mayapa",
    },
    {
        "region_name": "Sirang_Lupa",
        "region_code": "Sirang_Lupa",
    },
    {
        "region_name": "Majada",
        "region_code": "Majada",
    },
    {
        "region_name": "Palo-alto",
        "region_code": "Palo-alto",
    },
    {
        "region_name": "Barandal",
        "region_code": "Barandal",
    },
    {
        "region_name": "Batino",
        "region_code": "Batino",
    },
    {
        "region_name": "Lawa",
        "region_code": "Lawa",
    },
    {
        "region_name": "Real",
        "region_code": "Real",
    },
    {
        "region_name": "Painza",
        "region_code": "Painza",
    },
    {
        "region_name": "Lecheria",
        "region_code": "Lecheria",
    },
    {
        "region_name": "Halang",
        "region_code": "Halang",
    },
    {
        "region_name": "Turbina",
        "region_code": "Turbina",
    },
    {
        "region_name": "Punta",
        "region_code": "Punta",
    },
    {
        "region_name": "Babuyan",
        "region_code": "Babuyan",
    },
    {
        "region_name": "Laguerta",
        "region_code": "Laguerta",
    },
    {
        "region_name": "Hornalan",
        "region_code": "Hornalan",
    },
    {
        "region_name": "Bunggo",
        "region_code": "Bunggo",
    },
    {
        "region_name": "Mabato",
        "region_code": "Mabato",
    },
    {
        "region_name": "Burol",
        "region_code": "Burol",
    },
    {
        "region_name": "Kay-anlog",
        "region_code": "Kay-anlog",
    },
    {
        "region_name": "Ulango",
        "region_code": "Ulango",
    },
    {
        "region_name": "Tulo",
        "region_code": "Tulo",
    },
    {
        "region_name": "La_mesa",
        "region_code": "La_mesa",
    },
    {
        "region_name": "Bucal",
        "region_code": "Bucal",
    },
    {
        "region_name": "Pansol",
        "region_code": "Pansol",
    },
    {
        "region_name": "Maunong",
        "region_code": "Maunong",
    },
    {
        "region_name": "Saimsim",
        "region_code": "Saimsim",
    },
    {
        "region_name": "Camaligan",
        "region_code": "Camaligan",
    },
    {
        "region_name": "Puting_Lupa",
        "region_code": "Puting_Lupa",
    },
    {
        "region_name": "Bagong_Kalsada",
        "region_code": "Bagong_Kalsada",
    },
    {
        "region_name": "Sucol",
        "region_code": "Sucol",
    },
    {
        "region_name": "Masili",
        "region_code": "Masili",
    },
    {
        "region_name": "Makiling",
        "region_code": "Makiling",
    }
];

var temp_array= regions.map(function(item){
    return item.population;
});
var highest_value = Math.max.apply(Math, temp_array);

$(function() {

    for(i = 0; i < regions.length; i++) {

        $('#'+ regions[i].region_code)
        .css({'fill': 'rgba(11, 104, 170,' + regions[i].population/highest_value +')'})
        .data('region', regions[i]);
    }

    $('.map g').mouseover(function (e) {
        var region_data=$(this).data('region');
        $('<div class="info_panel">'+
            region_data.region_name + '<br>' +
            '</div>'
         )
        .appendTo('body');
    })
    .mouseleave(function () {
        $('.info_panel').remove();
    })
    .mousemove(function(e) {
        var mouseX = e.pageX, //X coordinates of mouse
            mouseY = e.pageY; //Y coordinates of mouse

        $('.info_panel').css({
            top: mouseY-50,
            left: mouseX - ($('.info_panel').width()/2)
        });
    });

});
