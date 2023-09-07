using System.Diagnostics;
using System.Net.Mail;
using System.Security.Cryptography;
using System.Text;
using System.Text.RegularExpressions;
using kpiyap.Models;
using Microsoft.AspNetCore.Mvc;
using MySql.Data.MySqlClient;
using Microsoft.AspNetCore.Http;
using System.Web;
using Microsoft.AspNetCore.Hosting.Server;
using System.IO;
using System.Drawing;
using static System.Net.Mime.MediaTypeNames;
using System.Data;
using System.Xml.Linq;

public class HomeController : Controller
{
    private readonly ILogger<HomeController> _logger;
    public static string? userMail;
    IWebHostEnvironment _appEnvironment;

    public HomeController(ILogger<HomeController> logger, IWebHostEnvironment appEnvironment)
    {
        _logger = logger;
        _appEnvironment = appEnvironment;
    }

    public IActionResult Index()
    {
        //отправка на почту сообщения
        string from = "aaaangeln01@mail.ru";
        string to = userMail;
        string password = "udbLaWm4B90zx1kyeWmk";

        MailMessage mailMessage = new MailMessage(from, to);
        mailMessage.Subject = "RACAR - автосалон";
        mailMessage.Body = $"Cпасибо за оставленную заявку в скором времени вы свяжимся с Вами.\nНадеемся мы сможем Вам помочь.\nС уважением RACAR.";
        SmtpClient smtp = new SmtpClient("smtp.mail.ru", 587);
        smtp.Credentials = new System.Net.NetworkCredential(from, password);
        smtp.EnableSsl = true;
        smtp.Send(mailMessage);
        return View();
    }

    public IActionResult Form()
    {
        return View();
    }

    public IActionResult Auth()
    {
        return View();
    }

    public IActionResult Models()
    {
        return View();
    }

    public IActionResult Contact()
    {
        return View();
    }

    public IActionResult Kabinet()
    {
        return View();
    }

    public IActionResult Delete()
    {
        return View();
    }

    public IActionResult Admin()
    {
        return View();
    }


    [HttpPost]
    public IActionResult Delete(string id)
    {
        MySqlConnection connection = new MySqlConnection("server=localhost;port=8889;username=root;password=root;database=avtosalon");
        connection.Open();
        string query = $"DELETE FROM models WHERE id_image='{id}'";
        MySqlCommand cmd = new MySqlCommand(query, connection);
        int i = cmd.ExecuteNonQuery();
        if (i > 0)
        {
            string mess = "Запись успешно удалена!";
            ViewBag.Message = mess;
            return View();
        }
        connection.Close();
        return View();
    }



    [HttpPost]
    public IActionResult Kabinet(string name)
    {
        MySqlConnection connection1 = new MySqlConnection("server=localhost;port=8889;username=root;password=root;database=avtosalon");
        connection1.Open();
        string query2 = $"UPDATE users SET name = '{name}' WHERE email='{userMail}'";
        MySqlCommand cmd2 = new MySqlCommand(query2, connection1);

        int rowsAffected1 = cmd2.ExecuteNonQuery();
        if (rowsAffected1 > 0)
        {
            Console.WriteLine("все получилось проверь");
        }
        else
        {
            Console.WriteLine("no");
        }
        return View();
    }

    
[HttpPost]
    public IActionResult Form(string email, string pass, string repass)
    {
        string cond = @"(\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*)";
        if (Regex.IsMatch(email, cond))
        {
            MySqlConnection connection = new MySqlConnection("server=localhost;port=8889;username=root;password=root;database=avtosalon");
            if (connection.State == System.Data.ConnectionState.Closed)
            {
                connection.Open();

                string query = $"SELECT COUNT(*) FROM users WHERE email='{email}'"; // здесь organizations - имя таблицы, а name - имя столбца с названием организации

                using (MySqlCommand command = new MySqlCommand(query, connection))
                {
                    int orgCount = Convert.ToInt32(command.ExecuteScalar());
                    if (orgCount > 0)
                    {
                        string mess = "Пользователь c таким ником уже есть!";
                        ViewBag.Message = mess;
                        return View();
                    }
                    else
                    {
                        if (pass == null)
                        {
                            string message = "Вы неввели пароль!";
                            ViewBag.Message = message;
                            return View();
                        }
                        else
                        {
                            if (pass.Length < 8)
                            {
                                string mess = "Пароль менее 8 символов!";
                                ViewBag.Message = mess;
                                return View();
                            }
                            else
                            {
                                if (pass != repass)
                                {
                                    string mess = "Пароли не совпадают!";
                                    ViewBag.Message = mess;
                                    return View();
                                }
                                else
                                {
                                    string message = "Спасибо за регистрацию!";
                                    ViewBag.Message = message;
                                    string hashing = HashPassword(pass);
                                    string query2 = $"INSERT INTO users(email,password,name) VALUES('{email}','{hashing}','name')";
                                    MySqlCommand cmd = new MySqlCommand(query2, connection);
                                    int i = cmd.ExecuteNonQuery();
                                    if (i > -1)
                                    {
                                        //отправка на почту сообщения
                                        string from = "aaaangeln01@mail.ru";
                                        string to = email;
                                        string password = "udbLaWm4B90zx1kyeWmk";

                                        MailMessage mailMessage = new MailMessage(from, to);
                                        mailMessage.Subject = "RACAR - автосалон";
                                        mailMessage.Body = $"Добро пожаловать на сайт RACAR.\nСпасибо {email} за регистрацию , мы очень рады, что Вы теперь с нами!\nНадеемся Вы сможете найти машину с нашей помощью!";
                                        SmtpClient smtp = new SmtpClient("smtp.mail.ru", 587);
                                        smtp.Credentials = new System.Net.NetworkCredential(from, password);
                                        smtp.EnableSsl = true;
                                        smtp.Send(mailMessage);

                                        return Redirect("/Home/Auth");
                                    }
                                    else
                                    {
                                        string message2 = "Вы не зарегистрированы, попробуте ещё раз!";
                                        ViewBag.Message = message2;
                                        return View();
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
        else
        {
            string message = "Вы ввели неверный формат почты";
            ViewBag.Message = message;
            return View();
        }
        return Redirect("/Home/Form");
    }

    [HttpPost]
    public IActionResult Auth(string email, string pass)
    {
        MySqlConnection connection = new MySqlConnection("server=localhost;port=8889;username=root;password=root;database=avtosalon");
        if (connection.State == System.Data.ConnectionState.Closed)
        {
            connection.Open();
            string query = $"SELECT COUNT(*) FROM users WHERE email='{email}'"; // здесь organizations - имя таблицы, а name - имя столбца с названием организации

            using (MySqlCommand command = new MySqlCommand(query, connection))
            {
                int orgCount = Convert.ToInt32(command.ExecuteScalar());
                if (orgCount <= 0)
                {
                    string mess = "Пользователя c таким ником нет, зарегистрируйтесь и попробуйте еще раз!";
                    ViewBag.Message = mess;
                    return View();
                }
                else
                {
                    if (email == "admin")
                    {
                        if (pass == "adminadmin")
                        {
                            return Redirect("/Home/Admin");
                        }
                        else
                        {
                            string mess = "Пароль неверный!";
                            ViewBag.Message = mess;
                            return View();
                        }
                    }
                    else
                    {
                        if (pass == null)
                        {
                            string mess = "Вы не ввели пароль!";
                            ViewBag.Message = mess;
                            return View();
                        }
                        else
                        {
                            string hashPassword = HashPassword(pass);
                            string query2 = $"select count(*) from users where email='{email}' and password='{hashPassword}'";
                            MySqlCommand cmd2 = new MySqlCommand(query2, connection);
                            int count = Convert.ToInt32(cmd2.ExecuteScalar());
                            if (count == 0)
                            {
                                string mess = "Пароль неверный!";
                                ViewBag.Message = mess;
                                return View();
                            }
                            else
                            {
                                userMail = email;
                                connection.Close();
                                return Redirect("/Home/Index");
                            }
                        }
                    }
                }
            }
        }
        return View();
    }


    [HttpPost]
    public async Task<IActionResult> Admin(IFormFile image, int year, string brend, string model_auto, string price, string kuzov, string dvigatel, string volume,string kpp, string color_auto, string color_salon, string material_salon)
    {
        ViewBag.ImagePath = await FileAdmin(image, year, brend, model_auto, price, kuzov,dvigatel,volume,kpp,color_auto, color_salon,material_salon);
        return View();
    }

    public async Task<string> FileAdmin(IFormFile image, int year,string brend, string model_auto, string price, string kuzov, string dvigatel, string volume, string kpp, string color_auto, string color_salon, string material_salon) {
    string imageName = "/images/"+image.FileName;
        using (var fileStream = new FileStream(_appEnvironment.WebRootPath + imageName, FileMode.Create))
        {
            await image.CopyToAsync(fileStream);
        }
        string query = $"INSERT INTO `models`(`name_image`, `marka_auto`, `model_auto`, `year_auto`, `type_kuzov`, `type_dvigatel`, `volume_dvigatel`, `KPP`, `color_auto`, `color_salon`, `material_salon`, `price`)" +
            $" VALUES ('{imageName}','{brend}','{model_auto}','{year}', '{kuzov}','{dvigatel}','{volume}','{kpp}','{color_auto}','{color_salon}','{material_salon}','{price}')";
        using (MySqlConnection connection = new MySqlConnection("server=localhost;port=8889;username=root;password=root;database=avtosalon"))
        {
            connection.Open();
            using (MySqlCommand command = new MySqlCommand(query, connection))
            {
                int row = command.ExecuteNonQuery();
                if (row > -1)
                {
                    string mess = "Данные успешно записаны!";
                    ViewBag.Message = mess;
                }
                else {
                    string mess = "Проверьте данные, возможно что-то вы ввели неправильно!";
                    ViewBag.Message = mess;
                }
            }
        }
        return imageName;
    }

    

    public string HashPassword(string pass)
    {
        SHA256 hash = SHA256.Create();
        byte[] bytes = Encoding.UTF8.GetBytes(pass);
        byte[] password = hash.ComputeHash(bytes);
        string hashPassword = Convert.ToBase64String(password);
        return hashPassword;
    }

    [ResponseCache(Duration = 0, Location = ResponseCacheLocation.None, NoStore = true)]
    public IActionResult Error()
    {
        return View(new ErrorViewModel { RequestId = Activity.Current?.Id ?? HttpContext.TraceIdentifier });
    }
}

