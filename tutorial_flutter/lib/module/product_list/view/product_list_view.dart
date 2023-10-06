import 'package:flutter/material.dart';
import 'package:hyper_ui/core.dart';
// import '../controller/product_list_controller.dart';

class ProductListView extends StatefulWidget {
  const ProductListView({Key? key}) : super(key: key);

  Widget build(context, ProductListController controller) {
    controller.view = this;

    return Scaffold(
      appBar: AppBar(
        title: const Text("Product List"),
        actions: [
          CircleAvatar(
              child: Text(
            "${controller.products.length}",
            style: TextStyle(
              fontSize: 14.0,
            ),
          )),
        ],
      ),
      body: ListView.builder(
        itemCount: controller.products.length,
        physics: const ScrollPhysics(),
        itemBuilder: (BuildContext context, int index) {
          var item = controller.products[index];
          return Card(
            child: ListTile(
              leading: CircleAvatar(
                backgroundColor: Colors.grey[200],
                backgroundImage: NetworkImage(
                  "${item["photo"]}",
                ),
              ),
              title: Text("${item["product_name"]}"),
              subtitle: Text("${item["description"]}"),
              trailing: IconButton(
                onPressed: () => controller.doDelete(item["id"]),
                icon: const Icon(
                  Icons.delete,
                  size: 24.0,
                ),
              ),
              onTap: () async {
                await Get.to(ProductFormView(
                  item: item,
                ));
                controller.getProducts();
              },
            ),
          );
        },
      ),
      floatingActionButton: FloatingActionButton(
        child: const Icon(Icons.add),
        onPressed: () async {
          await Get.to(ProductFormView());
          controller.getProducts();
        },
      ),
    );
  }

  @override
  State<ProductListView> createState() => ProductListController();
}
