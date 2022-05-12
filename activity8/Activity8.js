window.onload = function(){
    // Part 3: date picker
    $("#birthdate").datepicker();

    // Part 4: auto completion
    const programming_languages = ["ActionScript", "AppleScript", "Asp", "JavaScript", "Lisp", "Perl", "PHP", "Python"]
    $("#pl").autocomplete({source: programming_languages})
}