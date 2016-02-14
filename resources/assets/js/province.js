/**
 * Handcrafted with ♥ Beebit Solutions
 * Real coffee was used in this project development
 * Licensed under MIT License
 * contacto@beebit.es
 */

$("#country").change(function()
{
    if($(this).find(":selected").val() == "ES") {
        $("#province").parent().parent().fadeIn();
        $(this).parent().parent().addClass("m6");
    } else {
        $("#province").parent().parent().hide();
        $(this).parent().parent().removeClass("m6");
    }
});
$("#e_country").change(function()
{
    if($(this).find(":selected").val() == "ES") {
        $("#e_province").parent().parent().fadeIn();
        $(this).parent().parent().addClass("m6");
    } else {
        $("#e_province").parent().parent().hide();
        $(this).parent().parent().removeClass("m6");
    }
});
$("#r_country").change(function()
{
    if($(this).find(":selected").val() == "ES") {
        $("#r_province").parent().parent().fadeIn();
        $(this).parent().parent().addClass("m6");
    } else {
        $("#r_province").parent().parent().hide();
        $(this).parent().parent().removeClass("m6");
    }
});