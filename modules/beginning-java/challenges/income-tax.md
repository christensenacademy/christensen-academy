#Income Tax

**Estimated Time:** 75 minutes, assuming you already have some experience working with boolean logic, using a scanner, and just generally being awesome.

Your challenge is to write a program that calculates the amount of income tax a citizen must pay to the goverment of [Java](http://en.wikipedia.org/wiki/Java) in Rupiah (Rp), which is the Indonesian currency.

**Note:** You may assume the user will always input valid values.

In Java, income tax works as follows--actually, I just made this up, but you can pretend this is how it really works:

1. You must state your total income.
2. You must claim deductions that apply to you. There are only 3 possible deductions:
  * Robots: 200 Rp per robot (Java wants to encourage people to own robots)
  * Student: 1800 Rp (Java wants to tax students less than non-students)
  * Kind Old Lady Deduction: 5000 Rp (for making the world a better place...)
3. Your taxable income is calculated by subtracting your deductions from your taxable income.
4. The amount you owe in taxes is computed using your taxable income according to the following "tax bracket" system:
  * Poor Bracket (0-10,000 Rp): 8% tax
  * Lower Middle Class Bracket (10,001-25,000 Rp): 10% tax  
  * Middle Class Bracket (25,001-55,000 Rp): 12% tax  
  * Upper Middle Class Bracket (55,001-80,000 Rp): 14% tax  
  * Wealthy Bracket (80,001+ Rp): 16% tax
  
###Example
**Computer:** `Please enter your total income for the past year.`

**User:** `62000`

**Computer:** `How many robots do you own?`

**User:** `4`

Computer deducts 800 more from the stated income because there is a 200 deduction per robot.

**Computer:** `Are you a full-time student? Y/N`

**User:** `N`

Computer does not deduct anything because the user claimed to not be a student.

**Computer:** `Are you a kind old lady? Y/N`

**User:** `Y`

Computer deducts 5000 from the stated income.

Thanks to the deductions, the taxable income is 56200 Rp instead of the original 62,000.

Now the computer must calculate the tax based on the tax brackets.

* The amount owed in the poor bracket is `10000*0.08`, which equals 800 Rp.
* The amount owed in the lower middle class bracket is `(25000-10000)*0.10`, which equals 1500 Rp.
* The amount owed in the middle class bracket is `(55000-25000)*0.12`, which equals 2400 Rp.
* The amount owed in the upper middle class bracket is `(56200-55000)*0.14`, which equals 168 Rp.
* The amount owed in the wealthy bracket is 0 Rp.

The computer adds up these values and outputs `You owe 4868 Rb in taxes`.

##Portfolio
Make sure to save your file as `IncomeTax.java` and keep it with the rest of your files for this module.
