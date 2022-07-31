#include "namespaces/stringOperators.h"
#include <iostream>
#include <vector>

using namespace std;
using namespace StringOperators;

string spinWords(const string &str, const int wordSize) {
    vector<string> splited, out;
    StringOperators::split(str, ' ', splited);

    for (auto &s: splited) {
        if (s.size() > wordSize) {
            out.push_back(reverse(s));
        } else {
            out.push_back(s);
        }
    }

    return StringOperators::implode(" ", out);
}

int main()
{
    string out = "Hey fellow warriors";
    spinWords(out, 4);

    cout << out << endl;
    
    return 0;
}