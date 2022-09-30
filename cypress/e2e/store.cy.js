describe("auth spec", () => {
    it("admin can load produk page", () => {
        cy.visit("/login");
        cy.get("[data-id=input-email]").type("diza@admin.com");
        cy.get("[data-id=input-password]").type("admindiza");
        cy.get("[data-id=btn-signin]").click();
  
        cy.visit("/produk");
        cy.get("[data-id=tabel-produk]").contains("th", "Id");
        cy.get("[data-id=tabel-produk]").contains("th", "Nama Produk");
        cy.get("[data-id=tabel-produk]").contains("th", "Foto Produk");
        cy.get("[data-id=tabel-produk]").contains("th", "Harga");
        cy.get("[data-id=tabel-produk]").contains("th", "Stok");
        cy.get("[data-id=tabel-produk]").contains("th", "Diskon");
        cy.get("[data-id=tabel-produk]").contains("th", "Deskripsi");
        cy.get("[data-id=tabel-produk]").contains("th", "Nama Kategori");
        cy.get("[data-id=tabel-produk]").contains("th", "Nama Supplier");
        cy.get("[data-id=tabel-produk]").contains("th", "Action");  
    });

    it("admin can add data produk", () => {
        cy.visit("/login");
        
        cy.get("[data-id=input-email]").type("diza@admin.com");
        cy.get("[data-id=input-password]").type("admindiza");
        cy.get("[data-id=btn-signin]").click();
  
        cy.visit("/produk");
        cy.get("[data-id=input-produk]").click();
        cy.get("[data-id=input-nama]").type("Kemeja Batik");
        cy.get("[data-id=input-foto]").attachFile("batik.png");
        cy.get("[data-id=input-harga]").type("200000");
        cy.get("[data-id=input-stok]").type("10");
        cy.get("[data-id=input-diskon]").type("0.5");
        cy.get("[data-id=input-deskripsi]").type("Kemeja Batik Keraton Jogja");
        cy.get("[data-id=select-kategori]").select('LD');
        cy.get("[data-id=select-supplier]").select('GAP');
        cy.get("[data-id=btn-submit]").click();


    });
  });