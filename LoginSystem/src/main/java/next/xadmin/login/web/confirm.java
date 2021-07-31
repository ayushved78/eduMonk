package next.xadmin.login.web;

import java.io.IOException;
import java.io.PrintWriter;

import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.Cookie;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class confirm
 */
@WebServlet("/confirm")
public class confirm extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public confirm() {
        super();
        // TODO Auto-generated constructor stub
    }

	/**
	 * @see HttpServlet#doGet(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		response.getWriter().append("Served at: ").append(request.getContextPath());
	}

	/**
	 * @see HttpServlet#doPost(HttpServletRequest request, HttpServletResponse response)
	 */
	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		try{  
			  
		    response.setContentType("text/html");  
		    PrintWriter out = response.getWriter();  
		          
		    String n=request.getParameter("fname");  
		    out.print("Welcome "+n);  
		    String rl=request.getParameter("role");  
		    out.print("Role :  "+rl);  
		  
		    Cookie ck=new Cookie("fname",n);
		    Cookie ck1=new Cookie("role",rl);
		    response.addCookie(ck);//adding cookie in the response
		    response.addCookie(ck1);
		  
		    //creating submit button  
		    out.print("<form action='team'>");  
		    out.print("<input type='submit' value='Confirm'>");  
		    out.print("</form>");  
		    out.print("<form action='session.jsp'>");  
		    out.print("<input type='submit' value='Session'>");  
		    out.print("</form>"); 
		          
		    out.close();  
		  
		        }catch(Exception e){System.out.println(e);}  
	}

}
