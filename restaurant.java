

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 * Servlet implementation class Restaurant
 */
@WebServlet("/Restaurant")
public class Restaurant extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
    /**
     * @see HttpServlet#HttpServlet()
     */
    public Restaurant() {
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
		// TODO Auto-generated method stub
		doGet(request, response);
	}

		public static List<String> Foods = Arrays.asList("Mexicano","Italiano","Pizza","Chinese","Gushers","Go Starve");
	public static List<String> GoOut = Arrays.asList("Yes","Yes, of course","No. Just kidding Yes","Yes you stupid idiot","Dude come on...obviously yes. ","Not sure I can help with that...JK YES");
	public static List<String> WhatToDo = Arrays.asList("Literally Nothing","Try and spell Tuz's last name.","Go hurt Winston","Go tickle Rohan","Point and laugh at Pete","Go clap for Nic");
	public static List<String> Movies = Arrays.asList("Caddyshack","Rohan Finds Love","Who is Winston?","Miracle","Duck Hats Forever","You don't deserve a movie");
	public static List<String> Places = Arrays.asList("Rohan's House","Winston's Grave","Pete's Box","UVa Hackathon","Rohan's Feet","I don't wanna answer");
	public static List<String> Presents = Arrays.asList("Rohan's socks","Winston's tears","Winston's gf","Happiness","Pete's back hair","That guy sucks...no present");
}
