
namespace Str;

class Tools {

    public static function isChar(var ch) -> bool
    {
        if ((ch > 'a' && ch < 'z') || (ch > 'A' && ch < 'Z')) {
            return true;
        }
        return false;
    }
}