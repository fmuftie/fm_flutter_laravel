import 'package:dio/dio.dart';

class AuthService {
  static String? token;
  Future<bool> login({
    required String email,
    required String password,
  }) async {
    try {
      var response = await Dio().post(
        "http://127.0.0.1:8000/api/login",
        options: Options(
          headers: {
            "Content-Type": "application/json",
          },
        ),
        data: {
          "email": email,
          "password": password,
        },
      );
      Map obj = response.data;
      if (obj["success"] == false) return false;
      token = obj["data"]["token"];
      return true;
    } on Exception catch (_) {
      return false;
    }
  }
}
