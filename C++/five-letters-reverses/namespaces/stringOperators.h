#include <iostream>
#include <vector>
#include <sstream>

using namespace std;

namespace StringOperators {
    void split(std::string const &str, const char delim, std::vector<std::string> &out)
    {
        stringstream ss(str);

        string s;
        while (getline(ss, s, delim))
        {
            out.push_back(s);
        }
    }

    string reverse(string str)
    {
        string out;
        for (int i = str.length() - 1; i >= 0; i--)
            out += str[i];
        
        return out;
    }

    string implode( const string &glue, const vector<string> &pieces )
    {
        string a;
        int leng= pieces.size();
        for(int i=0; i<leng; i++)
        {
            a+= pieces[i];
            if (  i < (leng-1) )
                a+= glue;
        }
        return a;
    }
}