import java.util.Scanner;
class Calculate1
{
public static void main(String []args)
{
	Scanner scan=new Scanner(System.in);
	System.out.println("\n Enter a number of value of integer type :  ");
	int c=0;
	int a=scan.nextInt();
	System.out.println("\n Enter b number of value of integer type :  ");
	int b=scan.nextInt();
	System.out.println("\n Enter 1 to compute Sametion of two Integers :  ");
	System.out.println("\n Enter 2 to compute Multiplication of two Integers :  ");
	System.out.println("\n Enter 3 to compute Division of two Integers :  ");
	System.out.println("\n Enter 4 to compute Substraction of two Integers :  ");
	//System.out.println("\n Enter 0 to exit :  ");
	System.out.println("\n Enter your choice :  ");
	int choice=scan.nextInt();
	if(choice==1)
	{
		 c=a+b;
		System.out.println("Sametion is : "+c);
	}
	else
	{
		if(choice==2)
		{
			 c=a*b;
		System.out.println("Sametion is : "+c);
		}
		else
		{
			if(choice==3)
			{
				 c=a/b;
		System.out.println("Sametion is : "+c);
			}
			else
			{
				if(choice==4)
				{
					 c=a-b;
					System.out.println("Sametion is : "+c);
				}
					
				
			}
		}
	}
}
}