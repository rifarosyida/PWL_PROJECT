describe("update produk", () => {
    it("user can load edit page", () => {
        cy.visit("/login");
        cy.get("[data-id=input-email]").type("diza@admin.com");
        cy.get("[data-id=input-password]").type("admindiza");
        cy.get("[data-id=btn-signin]").click();

        cy.visit("/produk");
        cy.get("[data-id=btn-edit1").click();

        cy.visit("/produk/1/edit");

        // menampilkan halaman create
        cy.get("[data-id=edit-page-title]").should(
            "have.text",
            "Form Edit Data Produk"
        );

        cy.get("[data-id=label-nama]").should("have.text", "Nama Produk");
        cy.get("[data-id=edit-nama]").should("be.enabled");

        cy.get("[data-id=label-foto]").should("have.text", "Foto Produk");
        cy.get("[data-id=edit-foto]").should("be.enabled");

        cy.get("[data-id=label-harga]").should("have.text", "Harga");
        cy.get("[data-id=edit-harga]").should("be.enabled");

        cy.get("[data-id=label-stok]").should("have.text", "Stok");
        cy.get("[data-id=edit-stok]").should("be.enabled");

        cy.get("[data-id=label-diskon]").should("have.text", "Diskon");
        cy.get("[data-id=edit-diskon]").should("be.enabled");

        cy.get("[data-id=label-deskripsi]").should(
            "have.text",
            "Deskripsi Produk"
        );
        cy.get("[data-id=edit-deskripsi]").should("be.enabled");

        cy.get("[data-id=label-kategori]").should("have.text", "Kategori");
        cy.get("[data-id=select-kategori]").should("be.enabled");

        cy.get("[data-id=label-supplier]").should("have.text", "Supplier");
        cy.get("[data-id=select-supplier]").should("be.enabled");

        cy.get("[data-id=btn-reset]")
            .should("have.text", "Reset")
            .and("be.enabled");

        cy.get("[data-id=btn-submit]")
            .should("have.text", "Submit")
            .and("be.enabled");
    });

    it("user can update produk", () => {
        cy.visit("/login");
        cy.get("[data-id=input-email]").type("diza@admin.com");
        cy.get("[data-id=input-password]").type("admindiza");
        cy.get("[data-id=btn-signin]").click();

        cy.visit("/produk");
        cy.get("[data-id=btn-edit1").click();

        cy.visit("/produk/1/edit");

        cy.get("[data-id=edit-nama]").clear();
        cy.get("[data-id=edit-nama]").type("Kemeja Batik Edited");

        cy.get("[data-id=edit-foto]").attachFile("batik.png");
        cy.get("[data-id=edit-harga]").clear();
        cy.get("[data-id=edit-harga]").type("500");

        cy.get("[data-id=edit-stok]").clear();
        cy.get("[data-id=edit-stok]").type("90");

        cy.get("[data-id=edit-diskon]").clear();
        cy.get("[data-id=edit-diskon]").type("0.5");

        cy.get("[data-id=edit-deskripsi]").clear();
        cy.get("[data-id=edit-deskripsi]").type(
            "Kemeja Batik Keraton Jogja sudah di edit"
        );
        cy.get("[data-id=select-kategori]").select("LD");
        cy.get("[data-id=select-supplier]").select("GAP");
        cy.get("[data-id=btn-submit]").click();

        cy.get(".swal2-popup").should("be.visible");
    });
});
