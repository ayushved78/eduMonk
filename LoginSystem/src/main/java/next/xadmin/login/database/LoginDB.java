package next.xadmin.login.database;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import next.xadmin.login.bean.LoginBean;

public class LoginDB {
	private String dbUrl = "jdbc:mysql://localhost:3306/loginDB";
	private String uname = "root";
	private String pass = "password";
	private String dbDriver = "com.mysql.cj.jdbc.Driver";
	
	public void loadDriver(String dbDriver) {
		try {
			Class.forName(dbDriver);
		} catch (Exception e) {
			e.printStackTrace();
		}
		
	}
	
	public Connection getConnection() {
		Connection conn = null;
		try {
			conn = DriverManager.getConnection(dbUrl,uname,pass);
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return conn;
	}
	
	public boolean validate(LoginBean lb) {
		loadDriver(dbDriver);
		Connection conn = getConnection();
		boolean status = false;
		String sql = "select * from login where username = ? and password = ?";
		PreparedStatement ps;
		try {
			ps = conn.prepareStatement(sql);
			ps.setString(1, lb.getUsername());
			ps.setString(2, lb.getPassword());
			
			ResultSet rs = ps.executeQuery();
			status = rs.next();
		} catch (SQLException e) {
			e.printStackTrace();
		}		
		return status;
	}

}
