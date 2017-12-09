import java.util.Scanner;
class Methods
{
	public static float  Meth(float a,float b,float result)
	{
		//float result;
		result = (a+b)/2;
		//System.out.println("Average of two numbers : "+ result);
	return result;	
	}

	public static void main(String []args) 
	{
		Scanner sc = new Scanner(System.in);
		System.out.println("Enter a number : ");
	 	float a = sc.nextFloat();	 
		System.out.println("Enter b number : ");
		float b = sc.nextFloat();
		float result =0;
	float temp =0 ;
		temp=Meth(a,b,result);
		System.out.println("Average of two number :"+temp);	
	
	}
	



}
