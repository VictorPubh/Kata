#include <iostream>
#include <vector>

using namespace std;

namespace ArrayOperators
{
    bool in_array(char value, vector<char> array)
    {
        int size = array.size();
        for (int i = 0; i < size; i++)
        {
            if (value == array[i])
            {
                return true;
            }
        }

        return false;
    }
}