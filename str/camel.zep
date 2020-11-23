namespace Str;

class Camel
{
    public static function convert(string str, char symbol)
    {
        int i;
        string after = "";
        for i in range(0, strlen(str)) {
            if (str[i] == symbol) {
                let after .= strtoupper(str[i+1]);
                let i = i+1;
            } else {
                let after .= str[i];
            }
        }
        return after;
    }
}