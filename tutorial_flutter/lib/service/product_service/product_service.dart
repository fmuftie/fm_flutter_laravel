import 'package:dio/dio.dart';
import 'package:hyper_ui/core.dart';
import 'package:hyper_ui/service/auth_service/auth_service.dart';

class ProductService {
  Future<List> get() async {
    var response = await Dio().get(
      "http://127.0.0.1:8000/api/products",
      options: Options(
        headers: {
          "Content-Type": "application/json",
          "Authorization": "Bearer ${AuthService.token}"
        },
      ),
    );
    Map obj = response.data;
    return obj["data"];
  }

  Future create({
    required String photo,
    required String product_name,
    required double price,
    required String description,
    required String category,
  }) async {
    await Dio().post(
      "http://127.0.0.1:8000/api/products",
      options: Options(
        headers: {
          "Content-Type": "application/json",
          "Authorization": "Bearer ${AuthService.token}"
        },
      ),
      data: {
        "photo": photo,
        "product_name": product_name,
        "price": price,
        "description": description,
        "category": category,
      },
    );
  }

  Future update({
    required int id,
    required String photo,
    required String product_name,
    required double price,
    required String description,
    required String category,
  }) async {
    await Dio().put(
      "http://127.0.0.1:8000/api/products/$id",
      options: Options(
        headers: {
          "Content-Type": "application/json",
          "Authorization": "Bearer ${AuthService.token}"
        },
      ),
      data: {
        "photo": photo,
        "product_name": product_name,
        "price": price,
        "description": description,
        "category": category,
      },
    );
  }

  Future delete(int id) async {
    var response = await Dio().delete(
      options: Options(
        headers: {
          "Content-Type": "application/json",
          "Authorization": "Bearer ${AuthService.token}"
        },
      ),
      "http://127.0.0.1:8000/api/products/$id",
    );
    print(response.statusCode);
  }
}
