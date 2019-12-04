#include <iostream>
#include <fstream>
#include <string>
#include <cmath>

using namespace std;

int main()
{
	fstream inputFile;
	string nextLine;
	int nextNum, total = 0;

	inputFile.open("01.1-input.txt", ios::in);
	while(getline(inputFile, nextLine))	{
		nextNum = stoi(nextLine);
		total += floor(nextNum / 3) - 2;
	}

	cout << "Total fuel required: " << total << "\n";
}