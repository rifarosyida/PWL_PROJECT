describe("auth spec", () => {
  it("user can access login page", () => {
      cy.visit("/");
      cy.get("[data-id=title]").should("have.text", "DizaFashion Shop");
      cy.get("[data-id=input-email]").should("be.visible");
      cy.get("[data-id=input-password]").should("be.visible");
      cy.get("[data-id=btn-signin]").contains("Sign In").and("be.enabled");
      cy.get("[data-id=signup-text]").should(
          "have.text",
          "Don't have an account?Sign Up"
      );
  });

  it("user:admin can login with valid credential", () => {
      cy.visit("/login");

      cy.get("[data-id=input-email]").type("diza@admin.com");
      cy.get("[data-id=input-password]").type("admindiza");
      cy.get("[data-id=btn-signin]").click();

      cy.get("[data-id=title]").should("have.text", "Dashboard Admin");
      cy.get("[data-id=pengguna]").should("have.text","Pengguna");
      cy.get("[data-id=kategori]").should("have.text","Kategori");
      cy.get("[data-id=produk]").should("have.text","Produk");
      cy.get("[data-id=supplier]").should("have.text","Supplier");
      cy.get("[data-id=pemesanan]").should("have.text","Pemesanan");
  });


  it("user login with invalid credential", () => {
      cy.visit("/");

      cy.get("[data-id=input-email]").type("dija@admin.com");
      cy.get("[data-id=input-password]").type("admindiza");
      cy.get("[data-id=btn-signin]").click();

      cy.get("[data-id=invalid-login]").contains(
          "Username atau Password Salah!"
      );
  });
});