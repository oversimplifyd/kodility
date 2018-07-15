/** For this question, you will parse a string to determine if it contains only "balanced delimiters."

A balanced delimiter starts with an opening character ((, [, {), ends with a matching closing character (), ], } respectively), and has only other matching delimiters in between. A balanced delimiter may contain any number of balanced delimiters.
**/

function processData(input) {
    var delims = input.split('');
    console.log(parseDelim(delims)? "True": 'False');
} 

function parseDelim(delims) {
    var stack = [];
    for (var i = 0; i < delims.length; i++) {
        var delim = delims[i];
        switch (delim) {
            case '{':
            case '[':
            case '(':
                stack.push(delim);
                break;
            case '}':
                if (stack.pop() != '{')
                    return false;
                break;
            case ')':
               if (stack.pop() != '(')
                    return false;
                break;
            case ']':
                if (stack.pop() != "[")
                    return false;
                break;
        }
    }
     return stack.length == 0;
}
