#include "namespaces/arrayOperators.h"
#include <iostream>
#include <vector>
#include <algorithm>

using namespace std;
using namespace ArrayOperators;

string duplicate_encoder(const string &word)
{
    vector<char> existing_letters;
    string out;

    for (int i = 0; i < word.size(); i++)
    {
        char letter = tolower(word[i]);

        if (not ArrayOperators::in_array(letter, existing_letters))
        {
            std::string::difference_type letters_available = std::count(word.begin(), word.end(), letter);

            if (letters_available > 1) {
                existing_letters.push_back(letter);
            }
        }
    }

    for (int i = 0; i < word.size(); i++)
    {
        char letter = tolower(word[i]);

        if (ArrayOperators::in_array(letter, existing_letters))
        {
            out += ")";
        }
        else
        {
            out += "(";
        }
    }

    return out;
}

int main()
{
    cout << duplicate_encoder("din") << endl;
    cout << duplicate_encoder("recede") << endl;
    cout << duplicate_encoder("Success") << endl;
    cout << duplicate_encoder("(( @") << endl;


    return 0;
}