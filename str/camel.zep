namespace Str;

class Camel
{
    public static function convert(string str, char symbol) -> string
    {
        string after = "";
        var pos;
        int i = 0;
        var col;
        for i in range(0, strlen(str) - 1) {
            if (str[i] == symbol) {
                let i++;
                let pos = i;
                continue;
            }
            if (pos === i) {
                let after .= strtoupper(str[i]);
            } else {
                 let after .= str[i];
            }
        }
        return after;
    }
}