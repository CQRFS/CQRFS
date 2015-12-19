import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.io.*;

public class output {

	public static void main(String[] args) throws IOException {
		// TODO Auto-generated method stub
       System.out.println("this is test");
 
       String root=System.getProperty("user.dir");
              String proot=root;
    		  root=root+"/"+"codefortest";
       
       
     
       
       File file=new File(root);
    
       String test[];
       test=file.list();
       
       for(int i=0;i<test.length;i++)
       {
        System.out.println(test[i]);
       }
       
       String filename[]=null;
       int n=0;
       for(int i=0;i<test.length;i++)
       {
    	     char [] mass = test[i].toCharArray();
    	     char tt='.';
         if (mass[0]!=tt && !(test[i].equals("src")) && test[i].contains("\u002E")){
        	 { filename=test[i].split("\\.");
            n=1;
        	    break;
        	    }
         }
  
       }
       
       if (n==0)
           return;
       
       
       System.out.println(filename[0]);
       String cmd ="mkdir "+"codefortest/"+filename[0];
       try {
		Process pos = Runtime.getRuntime().exec(cmd);
	} catch (IOException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
       cmd="mkdir " +"codefortest/"+filename[0]+"/"+"src";
       try {
		Process pos2 = Runtime.getRuntime().exec(cmd);
		
	} catch (IOException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
       
       cmd="mkdir " +"codefortest/"+"temp";
       try {
		Process pos1 = Runtime.getRuntime().exec(cmd);
		
	} catch (IOException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}
       
       
       
       
       

       
       
       
       
       
       String fileFrom=root+"/"+filename[0]+"\u002E"+filename[1];
       String filesour=filename[0]+"\u002E"+filename[1];
       String fileTo=root+"/"+filename[0]+"/src"+"/"+filesour;
       try {
		FileInputStream in = new java.io.FileInputStream(fileFrom);
		FileOutputStream out = new FileOutputStream(fileTo); 
		
		byte[] bt = new byte[1024];  
        int count;  
        while ((count = in.read(bt)) > 0) {  
            out.write(bt, 0, count);  
        }  
        in.close();  
        out.close();  

		
	} catch (FileNotFoundException e) {
		// TODO Auto-generated catch block
		e.printStackTrace();
	}  
        
      
       
       File srcFile= new File(root+"/"+filename[0]+"\u002E"+filename[1]);
       srcFile.delete();

       
       
       
       FileWriter writer=null;
       String packaged=root+"/"+filename[0];
       Date date=new Date();
       DateFormat format=new SimpleDateFormat("yyyy-MM-dd-HH-mm-ss");
       String time=format.format(date);
       try {
   		writer = new FileWriter(packaged+"/sonar-project.properties",true);
   		writer.write("sonar.projectKey="+filename[0]+":"+time+"\r\n");
   		writer.write("sonar.projectName="+filename[1]+"::" +filename[0]+"::"+time+"\r\n");
   	    writer.write("sonar.projectVersion=1.0"+"\r\n");
   	    writer.write("sonar.sources=src"+"\r\n");
   	    String lang_tpye=null;
   	    if (filename[1].equals("java"))
   	    	    lang_tpye="java";
   	    writer.write("sonar.language="+lang_tpye+"\r\n");
   	    writer.write("sonar.sourceEncoding=UTF-8"+"\r\n");
   	    
       } catch (IOException e) {
   		// TODO Auto-generated catch block
   		e.printStackTrace();
   	}
          try {
   		writer.close();
   	} catch (IOException e) {
   		// TODO Auto-generated catch block
   		e.printStackTrace();
   	}
       
       
          
	
	
	
	FileWriter writer1=null;
          writer1 = new FileWriter(proot+"/tasklist/tasks.txt",true);
          writer1.write(filename[0]+"\r\n");
          writer1.close();



  String cmdss ="sh tt.sh "+filename[0];
       try {
    Process pos1 = Runtime.getRuntime().exec(cmdss);
    
  } catch (IOException e) {
    // TODO Auto-generated catch block
    e.printStackTrace();
  }    
  
	}
	
	

}
