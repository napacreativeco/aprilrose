<style>
    .product-archive {
        width: 100%;
        max-width: 100%;
    }
    /* Header */
    .product-archive header {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 40px 20px;
    }
    .product-archive header h1 { margin: 0; }

    /* Sorting */
    .product-archive .sorting {
        display: grid;
        grid-template-columns: 50% 50%;
        align-items: flex-end;
        flex-wrap: wrap;
        margin-bottom: 14px;
    }
    .product-archive .sorting p {
        margin: 0;
    }
    .product-archive .sorter select {
        border: var(--btn-border-black);
        padding: 5px 20px;
    }
    /* Search */
    .product-archive .searcher form {
        margin-left: 28px;
    }
    .product-archive .searcher input {
        width: 80%;
        padding: 10px 0px;
        border-top: 0;
        border-right: 0;
        border-bottom: 2px solid #000;
        border-left: 0px;
    }
    .product-archive .searcher button {
        padding: 5px;
        width: calc(20% - 20px);
        background: transparent;
        border: var(--btn-border-black);
    }
    /* Notices */
    .product-archive .header .notices {
        width: 100%;
    }
    /* Products */
    .product-archive .product-loop {
        padding: 0 20px 0 0;
    }
    .product-archive .row {
        max-width: 100%;
        padding: 0;
        display: grid;
        grid-template-columns: 15% 85%;
        position: relative;
    }
    .product-archive ul.products {
        width: 100%;
        list-style: none;
        margin: 0;
        padding: 0;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
        grid-gap: var(--product-gap);
    }
    .product-archive ul.products li {
        display: flex;
        flex-direction: column;
        margin: 0 0 30px 0;
    }
    .product-archive ul.products .image {
        width: 100%;
        height: 400px;
        display: flex;
        align-items: stretch;
        cursor: pointer;
    }
    .product-archive ul.products .image .link {
        width: 100%;
    }

    /* Info */
    .product-archive ul.products .info {
        display: grid;
        grid-template-columns: 85% 15%;
    }
    .product-archive ul.products .title p {
        font-size: 0.8rem;
        font-weight: 600;
        line-height: 1.1;
        margin: 0;
    }
    .product-archive a { text-decoration: none; }
    .product-archive .price { display: flex; justify-content: flex-end; }


    /* Sidebar */
    #sidebar {
        padding: 20px;
    }

    #sidebar ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    #sidebar a {
        text-decoration: none;
    }
    .sidebar { padding: 0px 20px; }
    .sidebar .total p { margin: 0 0 10px 0; font-size: 0.9rem; }
    .sidebar h2 { margin: 0 0 10px 0; }
    .sidebar ul { list-style: none; margin: 0; padding: 0; }
    .sidebar a { text-decoration: none; }

    @media (max-width: 575.98px) {}

    /* Small devices (landscape phones, less than 768px) */
    @media (max-width: 767.98px) {}

    /* Medium devices (tablets, less than 992px) */
    @media (max-width: 991.98px) {}

    /* Large devices (desktops, less than 1200px) */
    @media (max-width: 1199.98px) {}
</style>