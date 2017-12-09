import java.io.*;
//import java.util.Scanner;
class Strio
{ 
public static void main(String []args)
{

try
{
	int a,b;
DataInputStream d=new DataInputStream(System.in);
System.out.println("ENTER TWO NUMBER A & B : ");
	a=Integer.parseInt(d.readLine());
	b=Integer.parseInt(d.readLine());
	//Scanner scan=new Scanner(System.in)
	int c;
	c=a+b;
	System.out.println("sum"+c);
	
}
catch(Exception e)
{
	
}
}

}