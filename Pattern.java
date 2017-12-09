import java.util.Scanner;
class Pattern
{
public static void main(String []agrs)
{
Scanner scan= new Scanner(System.in);
System.out.println("\n Enter pattern size : ");
int n=scan.nextInt();
for(int i=1;i<=n;i++)
{
	for(int j=1;j<=i;j++)
	System.out.print(" "+j);
System.out.println("\n");
}

}


}