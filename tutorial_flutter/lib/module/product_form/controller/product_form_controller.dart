import 'package:flutter/material.dart';
import 'package:hyper_ui/core.dart';
import 'package:hyper_ui/service/product_service/product_service.dart';
// import '../view/product_form_view.dart';

class ProductFormController extends State<ProductFormView> {
  static late ProductFormController instance;
  late ProductFormView view;

  @override
  void initState() {
    instance = this;
    if (isEditMode) {
      photo = widget.item!["photo"];
      product_name = widget.item!["product_name"];
      price = double.parse(widget.item!["price"].toString());
      category = widget.item!["category"];
      description = widget.item!["description"];
    }
    super.initState();
  }

  @override
  void dispose() => super.dispose();

  @override
  Widget build(BuildContext context) => widget.build(context, this);

  bool get isEditMode => widget.item != null;

  String? photo;
  String? product_name;
  double? price;
  String? category;
  String? description;

  doSave() async {
    if (isEditMode) {
      await ProductService().update(
        id: widget.item!["id"],
        photo: photo!,
        product_name: product_name!,
        price: price!,
        description: description!,
        category: category!,
      );
    } else {
      await ProductService().create(
        photo: photo!,
        product_name: product_name!,
        price: price!,
        description: description!,
        category: category!,
      );
    }
    Get.back();
  }
}
