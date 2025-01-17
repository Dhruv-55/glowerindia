<div>
    <div class="content-inner-1 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="table-responsive">
                        <table class="table check-tbl style-1">
                            <thead>
                            <tr>
                                <th>Image</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Purchase</th>
                                <th class="text-end">Remove</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($wishlist_items as $item)
                                <tr>
                                    <td class="product-item-img"><img src="{{  env('PRODUCT_IMAGE_URL').$item->product->primary_image}}" alt="/"></td>
                                    <td class="product-item-name">{{ $item->product->name }}
                                    </td>
                                    <td class="product-item-price">₹{{  $item->product->selling_price }}</td>
                                    <td class="product-item-totle"><a class="btn btn-outline-secondary" href="registration.html">Add To Cart</a></td>
                                    <td class="product-item-close"><a href="javascript:void(0);" wire:click="removeItem({{ $item->product->id }})"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M9.42543 10.2537C9.83759 10.2125 10.2051 10.5132 10.2463 10.9254L10.7463 15.9254C10.7876 16.3375 10.4868 16.7051 10.0747 16.7463C9.66253 16.7875 9.29499 16.4868 9.25378 16.0746L8.75378 11.0746C8.71256 10.6625 9.01327 10.2949 9.42543 10.2537Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.5747 10.2537C14.9868 10.2949 15.2875 10.6625 15.2463 11.0746L14.7463 16.0746C14.7051 16.4868 14.3376 16.7875 13.9254 16.7463C13.5133 16.7051 13.2126 16.3375 13.2538 15.9254L13.7538 10.9254C13.795 10.5132 14.1625 10.2125 14.5747 10.2537Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.1238 1.25002H13.5053C13.7217 1.24988 13.9102 1.24976 14.0882 1.27819C14.7915 1.39049 15.4001 1.82915 15.729 2.46084C15.8123 2.62073 15.8718 2.79961 15.9401 3.00494L16.0517 3.33984C16.0706 3.39653 16.076 3.41258 16.0806 3.42522C16.2557 3.90933 16.7097 4.23659 17.2244 4.24964C17.2379 4.24998 17.2545 4.25004 17.3145 4.25004H20.3145C20.7288 4.25004 21.0645 4.58582 21.0645 5.00004C21.0645 5.41425 20.7288 5.75004 20.3145 5.75004H3.31445C2.90024 5.75004 2.56445 5.41425 2.56445 5.00004C2.56445 4.58582 2.90024 4.25004 3.31445 4.25004H6.31454C6.37458 4.25004 6.39115 4.24998 6.40469 4.24964C6.91934 4.23659 7.37336 3.90936 7.54848 3.42524C7.55308 3.41251 7.55838 3.39681 7.57737 3.33984L7.68897 3.00496C7.75727 2.79964 7.81678 2.62073 7.90004 2.46084C8.22898 1.82915 8.83758 1.39049 9.54088 1.27819C9.7189 1.24976 9.90742 1.24988 10.1238 1.25002ZM8.8226 4.25004C8.87411 4.14902 8.91976 4.04404 8.95903 3.93548C8.97095 3.90251 8.98265 3.86742 8.99767 3.82234L9.09748 3.52292C9.18865 3.24941 9.20964 3.19363 9.23046 3.15364C9.34011 2.94307 9.54298 2.79686 9.77741 2.75942C9.82194 2.75231 9.88148 2.75004 10.1698 2.75004H13.4593C13.7476 2.75004 13.8071 2.75231 13.8517 2.75942C14.0861 2.79686 14.289 2.94307 14.3986 3.15364C14.4194 3.19363 14.4404 3.2494 14.5316 3.52292L14.6313 3.82216L14.6701 3.9355C14.7093 4.04405 14.755 4.14902 14.8065 4.25004H8.8226Z" fill="white"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.11616 7.75169C5.52945 7.72414 5.88683 8.03684 5.91439 8.45014L6.37433 15.3492C6.46418 16.6971 6.52821 17.6349 6.66878 18.3405C6.80513 19.025 6.99546 19.3873 7.26888 19.6431C7.54229 19.8988 7.91645 20.0647 8.60845 20.1552C9.32185 20.2485 10.2619 20.25 11.6127 20.25H12.3861C13.7369 20.25 14.6769 20.2485 15.3903 20.1552C16.0823 20.0647 16.4565 19.8988 16.7299 19.6431C17.0033 19.3873 17.1937 19.025 17.33 18.3405C17.4706 17.6349 17.5346 16.6971 17.6245 15.3492L18.0844 8.45014C18.1119 8.03684 18.4693 7.72414 18.8826 7.75169C19.2959 7.77924 19.6086 8.13662 19.5811 8.54992L19.1176 15.5016C19.0321 16.7844 18.9631 17.8205 18.8011 18.6336C18.6327 19.4789 18.3463 20.185 17.7547 20.7384C17.1631 21.2919 16.4395 21.5307 15.5849 21.6425C14.7628 21.75 13.7244 21.75 12.4388 21.75H11.56C10.2744 21.75 9.23593 21.75 8.41389 21.6425C7.55924 21.5307 6.83569 21.2919 6.2441 20.7384C5.6525 20.185 5.36608 19.4789 5.19769 18.6336C5.03571 17.8205 4.96665 16.7844 4.88116 15.5016L4.41771 8.54992C4.39015 8.13662 4.70286 7.77924 5.11616 7.75169Z" fill="white"/>
                                        </svg></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
