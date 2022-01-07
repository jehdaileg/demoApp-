    <template>
        <div>

            <nav class="ml-6">
                <ul class="flex list-disc space-x-4 list-inside">
                    <li>
                        <Link
                        href="/"
                        :class="{'text-pink-500 underline font-bold': $page.component == 'Index'}"
                        >Index
                       </Link>

                     </li>

                    <li>
                        <Link
                        href="/users?data1=hello&data2=iLoveYou"
                        :class="{'font-bold underline text-pink-500': $page.url.startsWith('/users')}"
                        >
                        Users
                        </Link>
                    </li>

                    <li>
                        <Link
                        href="/settings"
                        :class="{'font-bold underline text-pink-500': $page.component == 'Setings'}"
                        >
                        Settings
                        </Link>
                    </li>

                    <li>
                        <Link
                        href="/logout" method="post" as="button">
                        Logout
                        </Link>

                    </li>
                    <li><Link href="/login" method="post" as="button" :data="{foo: 'barron'}" class="hover:text-blue-500 hover:underline">Login</Link></li>
                </ul>
            </nav>

        </div>
    </template>

    <script>

    import { Link } from "@inertiajs/inertia-vue3";


    export default {

        components: {
            Link,
        }

    }

    </script>
