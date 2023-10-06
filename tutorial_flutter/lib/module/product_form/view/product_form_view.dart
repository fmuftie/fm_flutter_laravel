import 'package:flutter/material.dart';
import 'package:hyper_ui/core.dart';
// import '../controller/product_form_controller.dart';

class ProductFormView extends StatefulWidget {
  final Map? item;
  const ProductFormView({
    Key? key,
    this.item,
  }) : super(key: key);

  Widget build(context, ProductFormController controller) {
    controller.view = this;

    return Scaffold(
      appBar: AppBar(
        title: const Text("Product Form"),
        actions: const [],
      ),
      body: SingleChildScrollView(
        child: Container(
          padding: const EdgeInsets.all(20.0),
          child: Column(
            children: [
              QImagePicker(
                label: "Photo",
                validator: Validator.required,
                value: controller.photo,
                onChanged: (value) {
                  controller.photo = value;
                },
              ),
              QTextField(
                label: "Product Name",
                validator: Validator.required,
                value: controller.product_name,
                onChanged: (value) {
                  controller.product_name = value;
                },
              ),
              QNumberField(
                label: "Price",
                validator: Validator.required,
                value: controller.price?.toString(),
                onChanged: (value) {
                  controller.price = double.tryParse(value) ?? 0;
                },
              ),
              QDropdownField(
                label: "Category",
                validator: Validator.required,
                items: [
                  {
                    "label": "Rempah",
                    "value": "Rempah",
                  },
                  {
                    "label": "Sembako",
                    "value": "Sembako",
                  }
                ],
                value: controller.category,
                onChanged: (value, label) {
                  controller.category = label;
                },
              ),
              QMemoField(
                label: "Description",
                validator: Validator.required,
                value: controller.description,
                onChanged: (value) {
                  controller.description = value;
                },
              ),
            ],
          ),
        ),
      ),
      bottomNavigationBar: QActionButton(
        label: "Save",
        onPressed: () => controller.doSave(),
      ),
    );
  }

  @override
  State<ProductFormView> createState() => ProductFormController();
}
