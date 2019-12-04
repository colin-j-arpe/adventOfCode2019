#include <iostream>
#include <fstream>
#include <string>
#include <cmath>

using namespace std;

int main()
{
	fstream inputFile;
	string nextLine;
	int nextNum, moduleFuel, fuelPart, totalFuel = 0;

	inputFile.open("01.1-input.txt", ios::in);
	while(getline(inputFile, nextLine))	{
		nextNum = stoi(nextLine);
// cout << "Module is " << nextNum << "\n";
		moduleFuel = 0;
		fuelPart = floor(nextNum / 3) - 2;
// cout << "Start with " << fuelPart << "\n";
		while(fuelPart > 0)	{
			moduleFuel += fuelPart;
			fuelPart = floor(fuelPart / 3) - 2;
// cout << "Then add " << fuelPart << "\n";
		}
// cout << "Totalling " << moduleFuel << "\n";
		totalFuel += moduleFuel;
		// return 0;
	}

	cout << "Total fuel required: " << totalFuel << "\n";
}