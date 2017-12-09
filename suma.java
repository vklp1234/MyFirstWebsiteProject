import java.util.Scanner;
class sum
{
	
	
	void add()
	{
		Scanner scan =new Scanner(System.in );
		System.out.println(" Enter A nmber : ");
		int  a=scan.nextInt();
		System.out.println(" Enter B number : ");
		int  b=scan.nextInt();
		System.out.println(" Enter c number : ");
		int  c = scan.nextInt();
		 int sum1=(a+b+c);
		System.out.println( "Sum is :"+sum1);
		
	}
}

class suma
{
	public static void main( String  []agrs)
	{
		sum s=new sum();
		s.add();
	
	}

}
