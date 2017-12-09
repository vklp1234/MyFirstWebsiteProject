import java.util.Scanner;
class Default
{
int a;
float b;
float avg;

Default()
{

a=3;
b=5;

}
Default(int x,float y )
{
a=x;b=y;
}
void avg()
{
avg=(a+b)/2;

}
 void avg(int x,int y)
{
a=x;b=y;
avg=(a+b)/2;
}
void show()
{
System.out.println("Average = "+ avg);
}
};
class Result
{

public static void main(String args[])
{

Scanner scan = new Scanner(System.in);
System.out.println("Enter parametries  value x = ");
int x= scan.nextInt();
System.out.println("Enter parametries  value y = ");
float y= scan.nextFloat();
Default D ,D1;
D1=new Default();
D=new Default(x,y);
D1.avg();
System.out.println("Default costructor use their : ");
D1.show();

D.avg();
System.out.println("Parameries costructor use their : ");
D.show();



} 

}